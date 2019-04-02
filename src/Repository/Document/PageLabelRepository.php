<?php

namespace App\Repository\Document;

use App\Entity\Document\PageLabel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PageLabel|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageLabel|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageLabel[]    findAll()
 * @method PageLabel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageLabelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PageLabel::class);
    }

    // /**
    //  * @return PageLabel[] Returns an array of PageLabel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PageLabel
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
