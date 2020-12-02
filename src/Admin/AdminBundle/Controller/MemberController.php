<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Member;
use AppBundle\Entity\Volonteer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;


class MemberController extends Controller
{
   




    /**
     * Displays a form to edit an existing catalogue entity.
     *
     */
    public function volonteerEditAction(Request $request, Volonteer $entity)
    {
        if ($request->isXmlHttpRequest()) { 

            $editForm = $this->createForm('AppBundle\Form\VolonteerEditType', $entity);
            $editForm->handleRequest($request);
            if ($editForm->isSubmitted())
            { 
                $em = $this->getDoctrine()->getManager();
                $entity->setConfirmationStatus(1);
                $em->persist($entity);
                $em->flush();                     

            }
            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }
    }


    /**
     * Lists all volonteer entities 
     *
     */
    public function volonteerAction()
    {
        $entity = new Volonteer();
        $edit_form = $this->createForm('AppBundle\Form\VolonteerEditType', $entity);
        $deleteForm = $this->createForm('AppBundle\Form\VolonteerDeleteType');

        return $this->render('@Admin/Default/volonteer_index.html.twig',[
            'edit_form' => $edit_form->createView(),
            'deleteForm' => $deleteForm->createView(),
        ]);
    }





    /*
      Lists all volonteer entities for jquery datatable representation.
    */
    public function volonteerDataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $member = $em->getRepository('AppBundle:Volonteer')->findAll();

            if ($member) {
                $data = array();
                foreach($member as $element) {

                    $data[] = ["id"   => $element->getId(),
                               "name" => $element->getName(),
                               "email" => $element->getEmail(),
                               "checked" => $element->getConfirmationStatus(),             
                               "date" => $element->getDate()->format('d/m/Y')                         

                              
                               
                            ];
                }
            } else {
                 $data = null;
            }

            $response = new JsonResponse();

        return $response->setData(['data' => $data]);

    

    }

    /**
     * Displays volonteer data to form.
     *
     */
    public function getVolonteerItemDataAction(Request $request, $id)
    {
        if ($request->isXmlHttpRequest()) { 
            $em = $this->getDoctrine()->getManager(); 
            $entity = $em->getRepository('AppBundle:Volonteer')->findOneBy(array('id' => $id));

            if($entity)
            {
                if( $entity->getImage() !=null || $entity->getCountry() != null){                   
                    $image= $entity->getImage()->getAssetPath();    
                    $country = $entity->getCountry()->getName();               
                }else{
                    $image= null;    
                    $country = null;            
                }
                $id = $entity->getId();
                $email = $entity->getEmail();
                $name = $entity->getName();
                
                $town = $entity->getTown();
                $phone= $entity->getPhone();
                $work= $entity->getWork();
               

            }

            $response = new JsonResponse();
            
            return $response->setData(array(
                'id' => $id,
                'town' => $town,
                'email' => $email,
                'name' => $name,
                'phone' => $phone,
                'work' => $work,
                'country' => $country
            
            ));
            
        } else {
            throw new \Exception('Erreur');
        }
    }


    /**
     * Deletes a member entity.
     *
     */
    public function deleteVolonteerAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\VolonteerDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Volonteer')->findOneBy(array('id' => $deleteForm['id']->getData()));
                if($entity)
                {
                    $em->remove($entity);
                    $em->flush();                      
                }
    
            }
            
            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }

       
    }



    /**
     * Deletes a member entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\MemberDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Member')->findOneBy(array('id' => $deleteForm['id']->getData()));
                if($entity)
                {
                    $em->remove($entity);
                    $em->flush();                      
                }
    
            }
            
            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }

       
    }



    public function volonteerMakePdfAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AppBundle:Volonteer')->findBy(['confirmation_status' => 1]);
        $file = "Volontaires";
        $html = $this->render('@Admin/Pdf/volonteer.html.twig',[
            'entity' => $entity,
        ]);

     
       $this->returnPDFResponseFromHTML($html, $file);
    }

    public function returnPDFResponseFromHTML($html, $file)
    {
        $PDF_HEADER_LOGO ;
        $PDF_HEADER_LOGO_WIDTH = 20; 
        $PDF_MARGIN_HEADER = 2;  
        $PDF_MARGIN_FOOTER = 5;
        $PDF_HEADER_TITLE = "Association les colombes";
        $PDF_HEADER_STRING = "tel: 123456789/email: contact@aee-assolescolombes.com/site-web: www.aee-assolescolombes.com/nrc: 00056789237";
        
        
        $pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, 'A4', true, 'UTF-8', true);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Association les colombes');
        $pdf->SetTitle( $file);
        $pdf->SetSubject($file);
        // set margins
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);       
        $pdf->SetFont('helvetica', '', 12, '', true);

        // set default header data
       
        $pdf->setFooterData(array(0,64,0), array(0,64,128));
        // set header and footer fonts
        $pdf->setHeaderFont(Array('helvetica', '', 10));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


        $pdf->SetMargins(10,15,10, 15);
        $pdf->AddPage();
        

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $filename = $file;
        
       
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);


        $pdf->Output($filename.".pdf",'I'); // This will output the PDF as a response directly
    }



}
