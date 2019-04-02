<?php

namespace App\Repository;

use App\Entity\LigneBudget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LigneBudget|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneBudget|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneBudget[]    findAll()
 * @method LigneBudget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneBudgetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LigneBudget::class);
    }

    // /**
    //  * @return LigneBudget[] Returns an array of LigneBudget objects
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
    public function findOneBySomeField($value): ?LigneBudget
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
