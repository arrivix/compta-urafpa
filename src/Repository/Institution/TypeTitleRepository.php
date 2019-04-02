<?php

namespace App\Repository\Institution;

use App\Entity\Institution\TypeTitle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeTitle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeTitle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeTitle[]    findAll()
 * @method TypeTitle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeTitleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeTitle::class);
    }

    // /**
    //  * @return TypeTitle[] Returns an array of TypeTitle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeTitle
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
