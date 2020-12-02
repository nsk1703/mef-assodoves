<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
class TagController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Tag();
        $tag = $em->getRepository('AppBundle:Tag')->findAll();

        $form = $this->createForm('AppBundle\Form\TagType', $entity);
        $editForm = $this->createForm('AppBundle\Form\TagEditType', $entity);
        $deleteForm = $this->createForm('AppBundle\Form\TagDeleteType');

        return $this->render('@Admin/Default/tag.html.twig',[
            'form' => $form->createView(),
            'edit_form' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ]);
    }


    /**
     * Lists all tag entities for jquery datatable representation.
     *
     */
    public function dataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $tag = $em->getRepository('AppBundle:Tag')->findAll();

            if ($tag) {
                $data = array();
                foreach($tag as $element) {
                    $data[] = array( "id"   => $element->getId(),
                                     "name" => $element->getName(),
                                     "name_en" => $element->getNameEn());
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
            $tag = $em->getRepository('AppBundle:Tag')->findOneBy(array('id' => $id));

            if($tag)
            {
                $id = $tag->getId();
                $name = $tag->getName();
                $name_en = $tag->getNameEn();

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
     * Add new tag entity.
     *
     */   
    public function newAction(Request $request)
    {
         if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $entity = new Tag();

            $form = $this->createForm('AppBundle\Form\TagType', $entity);
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
     * Finds and displays a tag entity.
     *
     */
    public function showAction(Tag $tag)
    {
        
        $editForm = $this->createForm('AppBundle\Form\TagEditType', $tag);

        return $this->render('@App/Default/tag/show.html.twig', array(
            'tag' => $tag,
            'edit_form' => $editForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing tag entity.
     *
     */
    public function editAction(Request $request, Tag $entity)
    {
        if ($request->isXmlHttpRequest()) { 

            $editForm = $this->createForm('AppBundle\Form\TagEditType', $entity);
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
     * Deletes a tag entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\TagDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Tag')->findOneBy(array('id' => $deleteForm['id']->getData()));
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
