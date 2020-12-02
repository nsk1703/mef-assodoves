<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Review;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ReviewController extends Controller
{
    public function indexAction(Request $request)
    {
        
        
        $deleteForm = $this->createForm('AppBundle\Form\ReviewDeleteType');
        return $this->render('@Admin/Default/review_index.html.twig',[
            'deleteForm' => $deleteForm->createView(),
        ]);
    }

    public function indexWaitedAction(Request $request)
    {
        $editForm = $this->createForm('AppBundle\Form\ReviewEditType');
        $deleteForm = $this->createForm('AppBundle\Form\ReviewDeleteType');
        return $this->render('@Admin/Default/review_waited.html.twig',[
            'edit_form' => $editForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ]);
    }

    /**
     * Lists all review entities for jquery datatable representation.
     *
     */
    public function dataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $review = $em->getRepository('AppBundle:Review')->findBy(['seen'=>'1','public' => '1']);

            if ($review) {
                $data = array();
                foreach($review as $element) {
                    $data[] = ["id"   => $element->getId(),
                               "email" => $element->getEmail(),
                               "content" => $element->getContent(),
                               "article" => $element->getArticle()->getTitle(),
                               "date" => $element->getDate()->format('d/m/Y')];
                }
            } else {
                 $data = null;
            }

            $response = new JsonResponse();

            return $response->setData(array('data' => $data));

        

    }


    /**
     * Lists all waited review entities for jquery datatable representation.
     *
     */
    public function waitedDataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $review = $em->getRepository('AppBundle:Review')->findBy(['public'=>'0']);

            if ($review) {
                $data = array();
                foreach($review as $element) {
                    $data[] = ["id"   => $element->getId(),
                               "email" => $element->getEmail(),
                               "content" => $element->getContent(),
                               "article" => $element->getArticle()->getTitle(),
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
            $review = $em->getRepository('AppBundle:Review')->findOneBy(array('id' => $id));

            if($review)
            {

                $id = $review->getId();
                $email = $review->getEmail();
                $content = $review->getContent();
                $article = $review->getArticle()->getTitle();
                $review->setSeen(1);
                $em->persist($review); 
                $em->flush();  

            }

            $response = new JsonResponse();
            
            return $response->setData(array(
                'id' => $id,
                'email' => $email,
                'content' => $content,
                'article' => $article));
            
        } else {
            throw new \Exception('Erreur');
        }
    }




    /**
     * Displays a form to show an existing review entity.
     *
     */
    public function showAction(Request $request, Review $entity)
    {
        if ($request->isXmlHttpRequest()) { 


            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }
    }

    /**
     * Deletes a review entity.
     *
     */
    public function editAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $form = $this->createForm('AppBundle\Form\ReviewEditType');
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Review')->findOneBy(array('id' => $form['id']->getData()));
                 // set entity to seen entity
                 $entity->setPublic(1);
                 $em->persist($entity); 
                 $em->flush();  
                return new JsonResponse([], 201);
                
            }else{
                throw new \Exception('Erreur');
            }
            
           

        } else {
            throw new \Exception('Erreur');
        }

       
    }




    /**
     * Deletes a review entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\ReviewDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Review')->findOneBy(array('id' => $deleteForm['id']->getData()));
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
