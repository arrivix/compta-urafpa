<?php

namespace App\Repository;

use App\Entity\Contrib;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Contrib|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contrib|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contrib[]    findAll()
 * @method Contrib[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContribRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Contrib::class);
    }

    // /**
    //  * @return Contrib[] Returns an array of Contrib objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contrib
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
