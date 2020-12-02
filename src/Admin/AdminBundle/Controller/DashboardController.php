<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /*$entity = $em->getRepository('AppBundle:Article')->findBy(['softDelete' => "1"]);
    $entity = $em->getRepository('AppBundle:Article')->findBy(['visible' => "0",'softDelete' => "0"]);
    $entity = $em->getRepository('AppBundle:Article')->findBy(['visible' => "1",'softDelete' => "0"]);*/
    
    public function notificationAction()
    {
        $em = $this->getDoctrine()->getManager(); 
        $review = $em->getRepository('AppBundle:Review')->findBy(['public'=>'0']);
        $contribution  = $em->getRepository('AppBundle:Contribution')->findAll();
       
        $volonteer = $em->getRepository('AppBundle:Volonteer')->findAll();

        return $this->render('@Admin/Modules/menu.html.twig',[
          'review' => $review,
          'contribution' => $contribution,
          'volonteer' => $volonteer,

        ]);
    }
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager(); 
        $review = $em->getRepository('AppBundle:Review')->findBy(['public'=>'0']);
        $contribution  = $em->getRepository('AppBundle:Contribution')->findAll();
        $article = $em->getRepository('AppBundle:Article')->findBy(['visible' => "1",'softDelete' => "0"]);
        $volonteer = $em->getRepository('AppBundle:Volonteer')->findAll();

        $latestReviews =  $em->getRepository('AppBundle:Review')->ByIndexReviews();
        $latestArticles = $em->getRepository('AppBundle:Article')->ByIndexArticles();
        $latestContribution = $em->getRepository('AppBundle:Contribution')->ByIndexContributions();
        $email = $em->getRepository('AppBundle:EmailCatch')->findAll();
 

        return $this->render('@Admin/Default/index.html.twig',[
            'review' => $review,
            'contribution' => $contribution,
            'volonteer' => $volonteer,
            'article' => $article,
            'email' => $email,
            'latestReviews' => $latestReviews,
            'latestContribution' => $latestContribution,
            'latestArticles' => $latestArticles,
        
        ]);
    }

    public function emailAction()
    {
        $em = $this->getDoctrine()->getManager(); 
        $entity = $em->getRepository('AppBundle:EmailCatch')->findAll();
        return $this->render('@Admin/Default/email.html.twig',[
            'entity' => $entity
        ]);
    }

    /**
     * return last 4 members contributions from contribution entity 
     *
     */

    public function getRecentContributions()
    {
        $em = $this->getDoctrine()->getManager();
        $data  = $em->getRepository('AppBundle:Contribution')->ByRecentContributions();
    
        return $data;
    }



}
