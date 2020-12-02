<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Volonteer;
use AppBundle\Entity\Member;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        return $this->render('@App/Default/index.html.twig',[
           
        ]);
    }


    public function aboutAction(Request $request)
    {
        
        return $this->render('@App/Default/about.html.twig');
    }

    public function faqAction(Request $request)
    {
        return $this->render('@App/Default/faq.html.twig');
    }

    public function securityAction(Request $request)
    {
        return $this->render('@App/Default/security.html.twig');
    }
    //patners page
    public function partnersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:Member')->findAll();
        return $this->render('@App/Default/partners.html.twig',['entity' => $entity]);
    }
    //legal mention page
    public function legalMentionsAction(Request $request)
    {
        return $this->render('@App/Default/legalMentions.html.twig');
    }

    //cgu page
    public function cguAction(Request $request)
    {
        return $this->render('@App/Default/cgu.html.twig');
    }

    //goto thank you page after payement succeded
    /*public function thankyouAction(Request $request)
    {
        return $this->render('@App/Default/thankyou.html.twig');
    }*/

    public function thankyouAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();

        
        $payementStatus = $session->get('paidTest');
        $session->remove('paidTest');
        

        if ($payementStatus != true)throw $this->createNotFoundException('La page n\'existe pas'); 

        return $this->render('@Main/Default/layout/thankyou.html.twig',[

        ]);

    }


    //display volonteer form on template
    public function volonteerAction(Request $request)
    {
        $entity = new Volonteer();
        $form = $this->createForm('AppBundle\Form\VolonteerType', $entity);

        return $this->render('@App/Default/volonteer.html.twig',[
            'form' => $form->createView(),
            ]);
    }

    
   

   


 

  
    





}
