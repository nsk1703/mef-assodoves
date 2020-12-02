<?php

namespace Pay\PayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use AppBundle\Entity\Member;
use AppBundle\Entity\Contribution;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

class PayController extends Controller
{
    public function checkoutAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $secretToken =  random_bytes(20);
        $membershipSession = $session->get('membershipSession');

        $form = $this->createForm('AppBundle\Form\StripePayType');
        $paypal_form = $this->createForm('AppBundle\Form\PayPalType');



        return $this->render('@App/Default/checkout.html.twig',[
            
            'secretToken' => $secretToken,
            'form' => $form->createView(),
            'paypal_form' => $paypal_form->createView(),
            ]);
    }




    public function stripePayAction(Request $request)
    {
      
            $form = $this->createForm('AppBundle\Form\StripePayType');
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {
                $em = $this->getDoctrine()->getManager();

                $session = $request->getSession();
            
                $totalAmount = $form['amount']->getData() * 100;
        
                // This is your real test secret API key.
                \Stripe\Stripe::setApiKey('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');
        
                $userEmail = $form['email']->getData();
                $cardName = $form['accountName']->getData();
                $token = $form['secure_token']->getData();

                // Create Customer In Stripe
                $customer = \Stripe\Customer::create(array(
                    "email" => $userEmail,
                    "source" => $token
                ));
        
                // Charge Customer
                $charge = \Stripe\Charge::create(array(
                "amount" => $totalAmount,
                "currency" => "eur",
                "description" => "Donnation de ".$userEmail." pour l'assocaition",
                "customer" => $customer->id
                ));
        
                // Customer Data
                $customerData = [
                'id' => $charge->customer,
                'email' => $userEmail
                ];
        
                if($charge->paid == true){

                    //creation of new paid test session 
                    $paidTest = $session->get('paidTest');
            
                    if (!$session->has('paidTest')) $session->set('paidTest',array());
                    $paidTest = $session->get('paidTest');
            
                    $paidTest['paidTest'] = true;
                    $session->set('paidTest',$paidTest);
                
                  
                    // get user expiration account date

                    $date = new \DateTime();
          
            

                    // Transaction Data
                    $transactionData = [
                    'customer_id' => $charge->customer,
                    'product' => $charge->description,
                    'amount' => $charge->amount,
                    'currency' => $charge->currency,
                    'status' => $charge->status,
                    'last4'  => $charge->last4,
                    'network'=> $charge->network,
                    'userName' => $form['username']->getData(),
                    'userPhone' => $form['phone']->getData(),
                    'user' => $form['username']->getData(),
                    'userEmail' =>  $userEmail,
                    ];
            
                    // Instantiate new contribution entity
                    $contribution = new Contribution();
                    // Add Transaction To DB
                    $contribution->setReference($charge->id);
                    $contribution->setInfo($transactionData);
                    $contribution->setDate(new \DateTime());
                    $em->persist($contribution);
                    $em->flush();                                            

                    // Send email to user for confirmation of his order

                    $message = \Swift_Message::newInstance()
                            ->setSubject('Confirmation du versement de votre don')
                            ->setFrom(array('contact@mef-assodoves.org' => " mef-assodoves.org"))
                            ->setTo($userEmail)
                            ->setCharset('utf-8')
                            ->setContentType('text/html')
                            ->setBody($this->renderView('@App/SwiftLayout/validationOrder.html.twig',[
                                'email' =>  $userEmail,
                                'amount' => $charge->amount,
                                'date' => $date, 
                                

                                ]));
                    
                    $this->get('mailer')->send($message);
                    
                    $this->get('session')->getFlashBag()->add('success','Le paiement de votre don à est validé avec succès');

                    return $this->redirect($this->generateUrl('app_thankyou_page'));
                }else{

                    $this->get('session')->getFlashBag()->add('error','Votre solde est insuffisant pour effectuer le paiement');
                    return $this->redirect($this->generateUrl('app_fund_checkout_page'));
                }

            }else{

                $this->get('session')->getFlashBag()->add('error','Votre carte est invalide pour pouvoir effectuer le paiement');
                return $this->redirect($this->generateUrl('app_fund_checkout_page'));
            }
       
    }



    public function paypalPayAction(Request $request)
    {
        

            $em = $this->getDoctrine()->getManager();

            $session = $request->getSession();
            $membershipSession = $session->get('membershipSession');
            $status  = $em->getRepository('AppBundle:Status')->findOneBy(['id' => $membershipSession]);
            $totalOrder = ($status->getPrice() * 12)*100 ;
            $user = $em->getRepository('UserBundle:User')->findOneBy(
                [
                'id'=>$this->container->get('security.token_storage')->getToken()->getUser()]);

        
            $clientId = "AVHlVqBXrWruPRnSTwl_F-0OZ_5jvH6ge3dDJlPWePdRHkGPmk1-3SOThr6jpaRMhoCL6nrOWqdWXYUe";
            $clientSecret = "EKWefjJxNhBIFtzKzYwXR0JExqCU3BSK71SAXLj6daA8LaEwzQsvksB-b2aVbQuICF0JH0HkvQGgedsQ";
            
            $environment = new SandboxEnvironment($clientId, $clientSecret);
            $client = new PayPalHttpClient($environment);

            $transaction = new OrdersCreateRequest();
            $transaction->prefer('return=representation');
            $transaction->body = [
                                "intent" => "CAPTURE",
                                "purchase_units" => [[
                                    "reference_id" => "test_ref_id1",
                                    'description' => 'Inscription de Membre '.$user->getEmail().' au status '.$status->getName(),
                                    'custom_id' => 'CUST-HighFashions',
                                    "amount" => [
                                        "value" => $totalOrder,
                                        "currency_code" => "EUR"
                                    ]
                                ]],
                                "application_context" => [
                                    'return_url' => 'https://example.com/return',
                                    'cancel_url' => 'https://example.com/cancel'
                                ] 
                            ];
            
            try {
                // Call API with your client and get a response for your call
                $response = $client->execute($transaction);
                return $this->redirect($this->generateUrl('app_thankyou_page'));
                // If call returns body in response, you can get the deserialized version from the result attribute of the response
                print_r($response);
            }catch (HttpException $ex) {
                echo $ex->statusCode;
                print_r($ex->getMessage());
                throw new \Exception('Erreur');
            }

           



        
    }




}
