<?php

namespace App\Repository\Resource;

use App\Entity\Resource\SiteLocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SiteLocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteLocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteLocation[]    findAll()
 * @method SiteLocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteLocationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SiteLocation::class);
    }

    // /**
    //  * @return SiteLocation[] Returns an array of SiteLocation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SiteLocation
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
