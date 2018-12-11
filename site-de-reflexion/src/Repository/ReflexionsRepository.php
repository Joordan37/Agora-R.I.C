<?php

namespace App\Repository;

use App\Entity\Reflexions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Reflexions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reflexions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reflexions[]    findAll()
 * @method Reflexions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReflexionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reflexions::class);
    }

    // /**
    //  * @return Reflexions[] Returns an array of Reflexions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reflexions
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
