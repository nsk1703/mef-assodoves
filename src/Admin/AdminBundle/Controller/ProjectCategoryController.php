<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ProjectCategory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
class ProjectCategoryController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new ProjectCategory();
        $projectCategory = $em->getRepository('AppBundle:ProjectCategory')->findAll();

        $form = $this->createForm('AppBundle\Form\ProjectCategoryType', $entity);
        $editForm = $this->createForm('AppBundle\Form\ProjectCategoryEditType', $entity);
        $deleteForm = $this->createForm('AppBundle\Form\ProjectCategoryDeleteType');

        return $this->render('@Admin/Default/projectCategory_index.html.twig',[
            'form' => $form->createView(),
            'edit_form' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ]);
    }


    /**
     * Lists all projectCategory entities for jquery datatable representation.
     *
     */
    public function dataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $projectCategory = $em->getRepository('AppBundle:ProjectCategory')->findAll();

            if ($projectCategory) {
                $data = array();
                foreach($projectCategory as $element) {
                    $data[] = ["id"   => $element->getId(),
                               "name" => $element->getName(),
                               "name_en" => $element->getNameEn(),
                               "date" => $element->getDate()->format('d/m/Y')];
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
            $projectCategory = $em->getRepository('AppBundle:ProjectCategory')->findOneBy(array('id' => $id));

            if($projectCategory)
            {
                $id = $projectCategory->getId();
                $name = $projectCategory->getName();
                $name_en = $projectCategory->getNameEn();

            }

            $response = new JsonResponse();
            return $response->setData(array(
                'id' => $id,
                'name' => $name,
                'name_en' => $name_en));
            
        } else {
            throw new \Exception('Erreur');
        }
    }







    /**
     * Add new projectCategory entity.
     *
     */   
    public function newAction(Request $request)
    {
         if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $entity = new ProjectCategory();

            $form = $this->createForm('AppBundle\Form\ProjectCategoryType', $entity);
            $form->handleRequest($request);
          

            if ($form->isSubmitted() && $form->isValid())
            {
                $entity->setDate(new \DateTime());
                $em->persist($entity);
                $em->flush();
            }
          
           
           
            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }
    }


    /**
     * Displays a form to edit an existing projectCategory entity.
     *
     */
    public function editAction(Request $request, ProjectCategory $entity)
    {
        if ($request->isXmlHttpRequest()) { 

            $editForm = $this->createForm('AppBundle\Form\ProjectCategoryEditType', $entity);
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
     * Deletes a projectCategory entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\ProjectCategoryDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:ProjectCategory')->findOneBy(array('id' => $deleteForm['id']->getData()));
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
