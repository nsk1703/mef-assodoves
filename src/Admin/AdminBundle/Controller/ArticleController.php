<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ArticleController extends Controller
{
    public function indexAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\ArticleSoftDeleteType');
        return $this->render('@Admin/Default/article_index.html.twig',[
            'form' => $form->createView()]);
    }


    public function indexDraftAction(Request $request)
    {
    
        $form = $this->createForm('AppBundle\Form\ArticleMakeVisibleType');
        $deleteForm = $this->createForm('AppBundle\Form\ArticleDeleteType');
        return $this->render('@Admin/Default/article_index_draft.html.twig',[
            
            'deleteForm' => $deleteForm->createView(),
            'form' => $form->createView()]);
    }


    public function indexDeletedAction(Request $request)
    {

        $form = $this->createForm('AppBundle\Form\ArticleMakeVisibleType');
        $deleteForm = $this->createForm('AppBundle\Form\ArticleDeleteType');
        return $this->render('@Admin/Default/article_index_deleted.html.twig',[
           
            'deleteForm' => $deleteForm->createView(),
            'form' => $form->createView()]);
    }


    /**
     * Add new published Article entity.
     *
     */   
    public function newPublishAction(Request $request)
    {

            $em = $this->getDoctrine()->getManager();
            $entity = new Article();

            $form = $this->createForm('AppBundle\Form\ArticleType', $entity);
            $form->handleRequest($request);
          

            if ($form->isSubmitted() && $form->isValid())
            {
                $entity->setDate(new \DateTime());
                $entity->setSeenCount(0);
                $entity->setVisible(1);
                $entity->setUser($this->container->get('security.token_storage')->getToken()->getUser());
                $em->persist($entity);
                $em->flush();
            }
          
            return $this->render('@Admin/Default/article_new.html.twig',[
                'form' => $form->createView()
            ]);


    }

    /**
     * Add new published Article entity.
     *
     */   
    public function newDraftAction(Request $request)
    {

            $em = $this->getDoctrine()->getManager();
            $entity = new Article();

            $form = $this->createForm('AppBundle\Form\ArticleType', $entity);
            $form->handleRequest($request);
          

            if ($form->isSubmitted() && $form->isValid())
            {
                $entity->setDate(new \DateTime());
                $entity->setSeenCount(0);
                $entity->setVisible(0);
                $entity->setUser($this->container->get('security.token_storage')->getToken()->getUser());
                $em->persist($entity);
                $em->flush();
            }
          
            return $this->render('@Admin/Default/article_new.html.twig',[
                'form' => $form->createView()
            ]);


    }







    /**
     * Lists all Article entities for jquery datatable representation.
     *
     */
    public function indexDataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Article')->findBy(['visible' => "1",'softDelete' => "0"]);

            if ($entity) {
                $data = array();
                foreach($entity as $element) {
                    $data[] = ["id"   => $element->getId(),
                                "title" => $element->getTitle(),
                                "content" => $element->getContent(),
                                "user" => $element->getUser()->getUserName(),
                                "image" => $element->getImage()->getAssetPath(),
                                "catalogue" => $element->getCatalogue()->getName(),
                                "seenCount" => $element->getSeenCount(),
                                "date" => $element->getDate()->format('d/m/Y')];
                }
            } else {
                 $data = null;
            }

            $response = new JsonResponse();

            return $response->setData(array('data' => $data));

        

    }

    /**
     * Lists all draft Article entities for jquery datatable representation.
     *
     */
    public function draftDataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Article')->findBy(['visible' => "0", 'softDelete' => "0"]);

            if ($entity) {
                $data = array();
                foreach($entity as $element) {
                    $data[] = ["id"   => $element->getId(),
                                "title" => $element->getTitle(),
                                "content" => $element->getContent(),
                                "user" => $element->getUser()->getUserName(),
                                "image" => $element->getImage()->getAssetPath(),
                                "catalogue" => $element->getCatalogue()->getName(),
                                "seenCount" => $element->getSeenCount(),
                                "date" => $element->getDate()->format('d/m/Y')];
                }
            } else {
                 $data = null;
            }

            $response = new JsonResponse();

            return $response->setData(array('data' => $data));

        

    }






    /**
     * Lists all soft deleted Article entities for jquery datatable representation.
     *
     */
    public function softDeleteDataTableDataAction(Request $request)
    {
        
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Article')->findBy(['softDelete' => "1"]);

            if ($entity) {
                $data = array();
                foreach($entity as $element) {
                    $data[] = ["id"   => $element->getId(),
                                "title" => $element->getTitle(),
                                "content" => $element->getContent(),
                                "user" => $element->getUser()->getUserName(),
                                "image" => $element->getImage()->getAssetPath(),
                                "catalogue" => $element->getCatalogue()->getName(),
                                "seenCount" => $element->getSeenCount(),
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
            $article = $em->getRepository('AppBundle:Article')->findOneBy(array('id' => $id));

            if($article)
            {
                $id = $article->getId();
                $title = $article->getTitle();

            }

            $response = new JsonResponse();
            return $response->setData([
                'id' => $id,
                'title' => $title]);
            
        } else {
            throw new \Exception('Erreur');
        }
    }




    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction(Request $request, Article $entity)
    {

            $editForm = $this->createForm('AppBundle\Form\ArticleType', $entity);
            $editForm->handleRequest($request);
            $imagePath = $entity->getImage()->getAssetPath();
            $entityId = $entity->getId();
            $entityTitle = $entity->getTitle();

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

            return $this->render('@Admin/Default/article_edit.html.twig',[
                'edit_form' => $editForm->createView(),
                'imagePath' => $imagePath,
                'entityId' => $entityId,
                'entityTitle' => $entityTitle,
            ]);

    }

    /**
     * renders entity visible to trash for soft delete.
     *
     */
    public function makeVisibleAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        {

            $form = $this->createForm('AppBundle\Form\ArticleMakeVisibleType');
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Article')->findOneBy(array('id' => $form['id']->getData()));
                if($entity)
                {
                    $entity->setVisible(1);
                    $entity->setSoftDelete(0);
                    $em->persist($entity);
                    $em->flush();                  
                }
    
            }

            return new JsonResponse([], 201);
            
        } else {
            throw new \Exception('Erreur');
        }
           

    }

    /**
     * moves entity to trash for soft delete.
     *
     */
    public function moveToTrashAction(Request $request)
    {

        if ($request->isXmlHttpRequest()) 
        {

            $form = $this->createForm('AppBundle\Form\ArticleSoftDeleteType');
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Article')->findOneBy(array('id' => $form['id']->getData()));
                if($entity)
                {
                    $entity->setSoftDelete(1);
                    $em->persist($entity);
                    $em->flush();                  
                }
    
            }

            return new JsonResponse([], 201);

        } else {
            throw new \Exception('Erreur');
        }     

    }

    /**
     * Deletes a Author entity.
     *
     */
    public function deleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        { 
            
            $deleteForm = $this->createForm('AppBundle\Form\ArticleDeleteType');
            $deleteForm->handleRequest($request);
            if ($deleteForm->isSubmitted() && $deleteForm->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                
                $entity = $em->getRepository('AppBundle:Article')->findOneBy(array('id' => $deleteForm['id']->getData()));
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
