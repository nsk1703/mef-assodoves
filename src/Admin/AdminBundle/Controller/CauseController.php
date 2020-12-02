<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Cause;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CauseController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cause = $em->getRepository('AppBundle:Cause')->findAll();

        return $this->render('@Admin/Default/cause_index.html.twig',[
            'cause' => $cause,]);
    }


    /**
     * Finds and displays a cause entity.
     *
     */
    public function showAction(Cause $cause)
    {
   
        $em = $this->getDoctrine()->getManager();
        $donation  = $em->getRepository('AppBundle:Donation')->findBy(['cause' => $cause->getId()]);
        $causeNews = $em->getRepository('AppBundle:CauseNews')->findBy(['cause' => $entity->getId() ]);

        return $this->render('@Admin/Default/cause_show.html.twig', [
            'cause' => $cause,
            'donation' => $donation,
            'causeNews' => $causeNews,

            ]);
    }






    /**
     * Displays data to form.
     *
     */
    public function getItemDataAction(Request $request, $id)
    {
        if ($request->isXmlHttpRequest()) { 
            $em = $this->getDoctrine()->getManager(); 
            $entity = $em->getRepository('AppBundle:Cause')->findOneBy(array('id' => $id));

            if($entity)
            {
                $id   = $entity->getId();
                $title = $entity->getTitle();
               

            }

            $response = new JsonResponse();
            return $response->setData(array(
                'id' => $id,
                'title' => $title
               ));
            
        } else {
            throw new \Exception('Erreur');
        }
    }







    /**
     * Add new Cause entity.
     *
     */   
    public function newAction(Request $request)
    {
            $em = $this->getDoctrine()->getManager();
            $entity = new Cause();

            $form = $this->createForm('AppBundle\Form\CauseType', $entity);
            $form->handleRequest($request);
          

            if ($form->isSubmitted() && $form->isValid())
            {
                $entity->setDate(new \DateTime());
                $em->persist($entity);
                $em->flush();
            }
          
           
           
            return $this->render('@Admin/Default/cause_new.html.twig',[
                'form' => $form->createView()
            ]);
    }

    

    /**
     * Displays a form to edit an existing Cause entity.
     *
     */
    public function editAction(Request $request, Cause $entity)
    {

            $editForm = $this->createForm('AppBundle\Form\CauseType', $entity);
            $editForm->handleRequest($request);
            $imagePath = $entity->getImage()->getAssetPath();
            if ($editForm->isSubmitted())
            { 
                $em = $this->getDoctrine()->getManager();
                if($editForm['image']['name']->getData() == "")
                {
                    $entity->setName($editForm['name']->getData());
                    $em->persist($entity);
                    $em->flush();                      
                }else{
                    $this->getDoctrine()->getManager()->flush();
                }
            }
            return $this->render('@Admin/Default/cause_edit.html.twig',[
                'edit_form' => $editForm->createView(),
                'imagePath' => $imagePath,
            ]);


    }

    /**
     * Deletes a Cause entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\CauseDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Cause')->findOneBy(array('id' => $deleteForm['id']->getData()));
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
