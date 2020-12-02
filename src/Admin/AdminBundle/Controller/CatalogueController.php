<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Catalogue;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
class CatalogueController extends Controller
{
    public function indexAction(Request $request)
    {
        $entity = new Catalogue();
        $form = $this->createForm('AppBundle\Form\CatalogueType', $entity);
        $editForm = $this->createForm('AppBundle\Form\CatalogueEditType', $entity);
        $deleteForm = $this->createForm('AppBundle\Form\CatalogueDeleteType');

        return $this->render('@Admin/Default/catalogue_index.html.twig',[
            'form' => $form->createView(),
            'edit_form' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ]);
    }


    /**
     * Lists all catalogue entities for jquery datatable representation.
     *
     */
    public function dataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $catalogue = $em->getRepository('AppBundle:Catalogue')->findAll();

            if ($catalogue) {
                $data = array();
                foreach($catalogue as $element) {
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
            $catalogue = $em->getRepository('AppBundle:Catalogue')->findOneBy(array('id' => $id));

            if($catalogue)
            {
                $id = $catalogue->getId();
                $name = $catalogue->getName();
                $name_en = $catalogue->getNameEn();

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
     * Add new catalogue entity.
     *
     */   
    public function newAction(Request $request)
    {
         if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $entity = new Catalogue();

            $form = $this->createForm('AppBundle\Form\CatalogueType', $entity);
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
     * Displays a form to edit an existing catalogue entity.
     *
     */
    public function editAction(Request $request, Catalogue $entity)
    {
        if ($request->isXmlHttpRequest()) { 

            $editForm = $this->createForm('AppBundle\Form\CatalogueEditType', $entity);
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
     * Deletes a catalogue entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\CatalogueDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Catalogue')->findOneBy(array('id' => $deleteForm['id']->getData()));
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
