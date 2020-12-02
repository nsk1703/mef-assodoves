<?php

namespace AppBundle\Repository;

/**
 * CountryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CountryRepository extends \Doctrine\ORM\EntityRepository
{
    public function ByCountry()
    {
        $qb = $this->createQueryBuilder('u')
                ->select('u')
                ->orderBy('u.id', 'DESC');
             
        return $qb->getQuery()->getResult();
    }


}
