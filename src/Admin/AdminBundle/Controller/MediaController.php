<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Media;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MediaController extends Controller
{
    /**
     * Lists all media entities
     *
     */
    public function indexAction()
    {
        $entity = new Media();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm('AppBundle\Form\MediaType', $entity);
        $deleteForm = $this->createForm('AppBundle\Form\MediaDeleteType');

        return $this->render('@Admin/Default/media_index.html.twig',[
            'form' => $form->createView(),
            'deleteForm' => $deleteForm->createView(),
        ]);
    }




    public function newAction(Request $request)
        {
           // if ($request->isXmlHttpRequest()) {
                $em = $this->getDoctrine()->getManager();
                $entity = new Media();

                $form = $this->createForm('AppBundle\Form\MediaType');
                $form->handleRequest($request);
        
                if ($form->isSubmitted() && $form->isValid())
                {
                    $entity->setDate(new \DateTime());
                    $em->persist($entity);
                    $em->flush();                                            

                }

                return new JsonResponse([], 201);

           // } else {
            //   throw new \Exception('Erreur');
           // }
        }
    }