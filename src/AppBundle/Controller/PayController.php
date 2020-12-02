<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PayController extends Controller
{
    public function checkoutAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /*$entity = $em->getRepository('AppBundle:Status')->findOneBy(['id' => $id]);*/
        $form = $this->createForm('AppBundle\Form\ContributionOnlinePayType');
        return $this->render('@App/Default/fund_checkout_new_member_pay.html.twig',[
            /*'entity' => $entity,*/
            'form' => $form->createView(),
            ]);
    }


}
