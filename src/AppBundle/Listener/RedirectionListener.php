<?php
namespace AppBundle\Listener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Response;

class RedirectionListener 
{
    public function __construct(ContainerInterface $container, SessionInterface $session)
    {
        $this->session = $session;
        $this->router = $container->get('router');
        $this->token_storage= $container->get('security.token_storage');
    }
    
    public function onKernelRequest(GetResponseEvent $event)
    {
 
        $route = $event->getRequest()->attributes->get('_route');
        
        if ($route == 'app_fund_checkout_page') {
            if (!is_object($this->token_storage->getToken()->getUser())) {
                $this->session->getFlashBag()->add('notification','Vous devez vous identifier');
                $event->setResponse(new RedirectResponse($this->router->generate('fos_user_security_login')));
        }
     }

    }


}