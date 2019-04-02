<?php

namespace App\Repository;

use App\Entity\QuinquenalContract;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method QuinquenalContract|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuinquenalContract|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuinquenalContract[]    findAll()
 * @method QuinquenalContract[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuinquenalContractRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, QuinquenalContract::class);
    }

    // /**
    //  * @return QuinquenalContract[] Returns an array of QuinquenalContract objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuinquenalContract
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
