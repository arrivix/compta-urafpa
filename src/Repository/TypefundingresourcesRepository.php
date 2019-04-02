<?php

namespace App\Repository;

use App\Entity\Typefundingresources;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Typefundingresources|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typefundingresources|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typefundingresources[]    findAll()
 * @method Typefundingresources[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypefundingresourcesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Typefundingresources::class);
    }

    // /**
    //  * @return Typefundingresources[] Returns an array of Typefundingresources objects
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
    public function findOneBySomeField($value): ?Typefundingresources
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
