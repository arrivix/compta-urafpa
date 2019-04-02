<?php

namespace App\Repository\Resource;

use App\Entity\Resource\Fluids;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fluids|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fluids|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fluids[]    findAll()
 * @method Fluids[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FluidsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fluids::class);
    }

    // /**
    //  * @return Fluids[] Returns an array of Fluids objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fluids
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
