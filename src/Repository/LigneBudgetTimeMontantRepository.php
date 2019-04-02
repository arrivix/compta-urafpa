<?php

namespace App\Repository;

use App\Entity\LigneBudgetTimeMontant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LigneBudgetTimeMontant|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneBudgetTimeMontant|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneBudgetTimeMontant[]    findAll()
 * @method LigneBudgetTimeMontant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneBudgetTimeMontantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LigneBudgetTimeMontant::class);
    }

    // /**
    //  * @return LigneBudgetTimeMontant[] Returns an array of LigneBudgetTimeMontant objects
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
    public function findOneBySomeField($value): ?LigneBudgetTimeMontant
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
