<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Status;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
class StatusController extends Controller
{
    public function indexAction(Request $request)
    {
        $entity = new Status();
        $form = $this->createForm('AppBundle\Form\StatusType', $entity);
        $editForm = $this->createForm('AppBundle\Form\StatusEditType', $entity);
        $deleteForm = $this->createForm('AppBundle\Form\StatusDeleteType');

        return $this->render('@Admin/Default/status_index.html.twig',[
            'form' => $form->createView(),
            'edit_form' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ]);
    }


    /**
     * Lists all status entities for jquery datatable representation.
     *
     */
    public function dataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $status = $em->getRepository('AppBundle:Status')->findAll();

            if ($status) {
                $data = array();
                foreach($status as $element) {
                    $data[] = ["id"   => $element->getId(),
                               "name" => $element->getName(),
                               "price" => $element->getPrice(),
                               "link" => $element->getCompanyWebsiteShow(),
                               "logo" => $element->getCompanyLogoShow(),
                               "company" => $element->getcompanyNameShow()];
                }
            } else {
                 $data = null;
            }

            $response = new JsonResponse();

            return $response->setData(array('data' => $data));

        

    }


    /**
     * Displays data to form.
     *
     */
    public function getItemDataAction(Request $request, $id)
    {
        if ($request->isXmlHttpRequest()) { 
            $em = $this->getDoctrine()->getManager(); 
            $status = $em->getRepository('AppBundle:Status')->findOneBy(array('id' => $id));

            if($status)
            {
                $id = $status->getId();
                $name = $status->getName();
                $price = $status->getPrice();
                $logoShow = $status->getCompanyWebsiteShow();
                $linkShow = $status->getCompanyWebsiteShow();
                $companyShow = $status->getcompanyNameShow();

            }

            $response = new JsonResponse();
            return $response->setData(array(
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'logoShow' => $logoShow,
                'linkShow' => $linkShow,  
                'companyShow' => $companyShow,       
            ));
            
        } else {
            throw new \Exception('Erreur');
        }
    }







    /**
     * Add new status entity.
     *
     */   
    public function newAction(Request $request)
    {
         if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $entity = new Status();

            $form = $this->createForm('AppBundle\Form\StatusType', $entity);
            $form->handleRequest($request);
          

            if ($form->isSubmitted() && $form->isValid())
            {
                $em->persist($entity);
                $em->flush();
            }
          
           
           
            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }
    }


    /**
     * Displays a form to edit an existing status entity.
     *
     */
    public function editAction(Request $request, Status $entity)
    {
        if ($request->isXmlHttpRequest()) { 

            $editForm = $this->createForm('AppBundle\Form\StatusEditType', $entity);
            $editForm->handleRequest($request);
            if ($editForm->isSubmitted())
            { 
                $em = $this->getDoctrine()->getManager();
                $this->getDoctrine()->getManager()->flush();

            }
            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }
    }

    /**
     * Deletes a status entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\StatusDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Status')->findOneBy(array('id' => $deleteForm['id']->getData()));
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


}
