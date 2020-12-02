<?php

namespace AppBundle\Repository;

/**
 * MemberRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MemberRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function ByIndexMembers(){
    
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.membershipActivation = 1')
            ->andWhere('u.membershipWaited = 0')
            ->setMaxResults(8)
            ->orderBy('u.id', 'DESC');
        return $qb->getQuery()->getResult();
            
    }


}