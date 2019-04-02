<?php

namespace App\Repository\Institution;

use App\Entity\Institution\ResponsibleTitle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResponsibleTitle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResponsibleTitle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResponsibleTitle[]    findAll()
 * @method ResponsibleTitle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponsibleTitleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResponsibleTitle::class);
    }

    // /**
    //  * @return ResponsibleTitle[] Returns an array of ResponsibleTitle objects
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
    public function findOneBySomeField($value): ?ResponsibleTitle
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
