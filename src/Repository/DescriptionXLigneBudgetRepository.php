<?php

namespace App\Repository;

use App\Entity\DescriptionXLigneBudget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DescriptionXLigneBudget|null find($id, $lockMode = null, $lockVersion = null)
 * @method DescriptionXLigneBudget|null findOneBy(array $criteria, array $orderBy = null)
 * @method DescriptionXLigneBudget[]    findAll()
 * @method DescriptionXLigneBudget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DescriptionXLigneBudgetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DescriptionXLigneBudget::class);
    }

    // /**
    //  * @return DescriptionXLigneBudget[] Returns an array of DescriptionXLigneBudget objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DescriptionXLigneBudget
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
