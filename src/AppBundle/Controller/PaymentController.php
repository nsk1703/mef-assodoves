<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends Controller
{
    /**
     * Finds and displays a cause entity.
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function donationAction(Request $request, $slug)
    {
   
        $em = $this->getDoctrine()->getManager();
        $entity  = $em->getRepository('AppBundle:Cause')->findOneBy(['slug' => $slug]);
        $form = $this->createForm('AppBundle\Form\DonationType');
        
        //$reviews = $em->getRepository('AppBundle:BlogReview')->findBy(['article' => $entity->getId() ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $entity->setDate(new \DateTime());
            $em->persist($entity);
            $em->flush();
        }

        return $this->render('@App/Default/donation_pay.html.twig', [
            'entity' => $entity,
            'form' => $form->createView()]
        );
    }

    /**
     * Finds and displays a cause entity.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public function contributionAction(Request $request)
    {
   
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('AppBundle\Form\ContributionOnlinePayType');

        $form->handleRequest($request);
          

        if ($form->isSubmitted() && $form->isValid())
        {
            $entity->setDate(new \DateTime());
            $em->persist($entity);
            $em->flush();
        }
      
        return $this->render('@App/Default/contribution_pay.html.twig', [

            'form' => $form->createView()
            

            ]);
    }


}
