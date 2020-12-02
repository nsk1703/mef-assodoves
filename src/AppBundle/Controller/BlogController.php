<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class BlogController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository('AppBundle:Article')->findBy(['visible' => "1",'softDelete' => "0"]);
        $catalogue = $em->getRepository('AppBundle:Catalogue')->findAll();
        $sideBarArticles = $em->getRepository('AppBundle:Article')->ByRecentArticles();
        $entity = $this->get('knp_paginator')->paginate($items,$request->query->get('page', 1),10);
        $catalogueName = null;
        return $this->render('@App/Default/blog_index.html.twig',[
           'entity' => $entity,
           'catalogue' => $catalogue,
           'sideBarArticles' => $sideBarArticles,
           'catalogueName' => $catalogueName,
        ]);
    } 

    //show articles of same category on blog index page
    public function catalogueAction(Request $request, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        $getCatalogue  = $em->getRepository('AppBundle:Catalogue')->findOneBy(['slug' => $slug]);
        $catalogueId = $getCatalogue->getId();
        $catalogueName = $getCatalogue->getName();
        $items = $em->getRepository('AppBundle:Article')->findBy(['visible' => "1", 'catalogue' => $catalogueId,'softDelete' => "0"]);
        $catalogue = $em->getRepository('AppBundle:Catalogue')->findAll();
        $sideBarArticles = $em->getRepository('AppBundle:Article')->ByRecentArticles();
        $entity = $this->get('knp_paginator')->paginate($items,$request->query->get('page', 1),10);

        return $this->render('@App/Default/blog_index.html.twig',[
           'entity' => $entity,
           'catalogue' => $catalogue,
           'sideBarArticles' => $sideBarArticles,
           'catalogueName' => $catalogueName,
        ]);
    }


    /**
     * Finds and displays a cause entity.
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function showAction($slug)
    {
   
        $em = $this->getDoctrine()->getManager();
        $entity  = $em->getRepository('AppBundle:Article')->findOneBy(['slug' => $slug,'visible' => "1",'softDelete' => "0"]);
        $countHolder =  $entity->getSeenCount();
        //count views every time a user opens an article
        $entity->setSeenCount($countHolder +1);
        $em->persist($entity);
        $em->flush();   


        $form = $this->createForm('AppBundle\Form\ReviewType');
        $reviews = $em->getRepository('AppBundle:Review')->findBy(['article' => $entity->getId(),'public' => 1 ]);
        $sameArticleCategory = $em->getRepository('AppBundle:Article')->BySimilarArticle($entity->getId(),$entity->getCatalogue()->getId() );


        $catalogue = $em->getRepository('AppBundle:Catalogue')->findAll();
        $sideBarArticles = $em->getRepository('AppBundle:Article')->ByRecentArticles();

        return $this->render('@App/Default/blog_show.html.twig', [
            'entity' => $entity,
            'reviews' => $reviews,
            'form' => $form->createView(),
            'catalogue' => $catalogue,
            'sameArticleCategory' => $sameArticleCategory,
            'sideBarArticles' => $sideBarArticles,

            ]);
    }

}
