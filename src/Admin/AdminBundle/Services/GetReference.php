<?php
namespace Admin\AdminBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class GetReference 
{
    public function __construct(TokenStorageInterface $tokenStorage, $entityManager)
    {
        $this->tokenStorage = $tokenStorage;
        $this->em = $entityManager;
    }
    
    public function reference()
    {
        $reference = $this->em->getRepository('AppBundle:Member')->findOneBy(array('id' => 'DESC'));
        
        if (!$reference)
            return 1;
        else 
            return $reference->getReference() +1;
    }
}