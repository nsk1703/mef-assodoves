<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CauseController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository('AppBundle:Cause')->findAll();
        $catalogue = $em->getRepository('AppBundle:ProjectCategory')->findAll();
        $entity = $this->get('knp_paginator')->paginate($items,$request->query->get('page', 1),10);

        return $this->render('@App/Default/cause_index.html.twig',[
           'entity' => $entity,
           'catalogue' => $catalogue,
        ]);
    } 

    /**
     * Finds and displays a cause entity.
     *
     */
    public function showAction($slug)
    {
   
        $em = $this->getDoctrine()->getManager();
        $entity  = $em->getRepository('AppBundle:Cause')->findOneBy(['slug' => $slug]);
        $donation  = $em->getRepository('AppBundle:Donation')->findBy(['cause' => $entity->getId()]);
        $catalogue = $entity->getProjectCategory()->getId();
        $sameCausesCategory = $em->getRepository('AppBundle:Cause')->BySimilarCauses($entity->getId(),$catalogue );
        $causeNews = $em->getRepository('AppBundle:CauseNews')->findBy(['cause' => $entity->getId() ]);

        return $this->render('@App/Default/cause_show.html.twig', [
            'entity' => $entity,
            'donation' => $donation,
            'sameCausesCategory' => $sameCausesCategory,
            'causeNews' => $causeNews,
            ]);
    }

}
