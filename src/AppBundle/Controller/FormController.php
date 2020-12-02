<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Volonteer;
use AppBundle\Entity\Review;
use AppBundle\Entity\EmailCatch;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class FormController extends Controller
{
    public function volonteerFormAction()
    {
        $form = $this->createForm('AppBundle\Form\VolonteerType');
        return $this->render('@App/Modules/volonteer_form.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * Finds and displays a cause entity.
     *
     */
    public function reviewNewAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) { 

            $em = $this->getDoctrine()->getManager();
            $entity = new Review();

            
            $form = $this->createForm('AppBundle\Form\ReviewType');
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {

                $article  = $em->getRepository('AppBundle:Article')->findOneBy(['id' => $form['article']->getData()]);
                $entity->setDate(new \DateTime());
                $entity->setArticle($article);
                $entity->setName($form['name']->getData());
                $entity->setEmail($form['email']->getData());
                $entity->setContent($form['content']->getData());
                $entity->setPublic(0);
                $entity->setSeen(0);
                $em->persist($entity);
                $em->flush();
            }
          
            return new JsonResponse([], 201);


        } else {
            throw new \Exception('Erreur');
        }
    }






    /**
     * Finds and displays a cause entity.
     *
     */
    public function volonteerSubmitFormAction()
    {
        if ($request->isXmlHttpRequest()) { 

            $em = $this->getDoctrine()->getManager();
            $entity = new Volonteer();

            $form = $this->createForm('AppBundle\Form\VolonteerType', $entity);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {
                $entity->setDate(new \DateTime());
                $entity->setConfirmationStatus(0);
                $em->persist($entity);
                $em->flush();
            }
          
            return new JsonResponse([], 201);


        } else {
            throw new \Exception('Erreur');
        }
    }


    public function searchFormAction()
    {
        $form = $this->createForm('AppBundle\Form\VolonteerType');
        return $this->render('@App/Modules/volonteer_form.html.twig',[
            'form' => $form->createView()
        ]);
    }

    public function searchDataFormAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
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

    public function newsletterFormAction()
    {
        $form = $this->createForm('AppBundle\Form\VolonteerType');
        return $this->render('@App/Modules/volonteer_form.html.twig',[
            'form' => $form->createView()
        ]);
    }



    //set email catch form on template
    public function emailAction()
    {
        $entity = new EmailCatch();
        $form = $this->createForm('AppBundle\Form\EmailCatchType', $entity);

        return $this->render('@App/Modules/newsletter_form.html.twig',[
            'form' => $form->createView(),
            ]);
    }


    //set new entity email catch for newsletter
    public function emailCatchAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) 
        {
            $entity = new EmailCatch();
            $form = $this->createForm('AppBundle\Form\EmailCatchType', $entity);
            $form->handleRequest($request);
  

            if ($form->isSubmitted())
            { 

                $em = $this->getDoctrine()->getManager();
                $checkData = $em->getRepository('AppBundle:EmailCatch')->findOneBy(['email' => $form['email']->getData()]);
                if($checkData == null)
                {
                    $entity->setDate(new \DateTime());
                    $em->persist($entity);
                    $em->flush();      
                }
                                
               
            }

                return new JsonResponse([], 201);
            
        } else {
            throw new \Exception('Erreur');
        }

    }


}
