<?php

namespace Pay\PayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PayBundle:Default:index.html.twig');
    }
}
