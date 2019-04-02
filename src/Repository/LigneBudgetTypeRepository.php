<?php

namespace App\Repository;

use App\Entity\LigneBudgetType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LigneBudgetType|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneBudgetType|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneBudgetType[]    findAll()
 * @method LigneBudgetType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneBudgetTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LigneBudgetType::class);
    }

    // /**
    //  * @return LigneBudgetType[] Returns an array of LigneBudgetType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LigneBudgetType
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
