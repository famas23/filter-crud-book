<?php

namespace InfoBundle\Repository;

/**
 * InfoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InfoRepository extends \Doctrine\ORM\EntityRepository
{
    public function recherche($chaine)
    {
         $qb = $this->createQueryBuilder('u')
                    ->select('u')
                    ->where('u.titre like :chaine')
                  
                    ->orderBy('u.id')
                    ->setParameter('chaine','%'.$chaine.'%');
        return $qb->getQuery()->getResult();
   }}