<?php

namespace App\Repository;

use App\Entity\FundingResource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FundingResource|null find($id, $lockMode = null, $lockVersion = null)
 * @method FundingResource|null findOneBy(array $criteria, array $orderBy = null)
 * @method FundingResource[]    findAll()
 * @method FundingResource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FundingResourceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FundingResource::class);
    }

    // /**
    //  * @return FundingResource[] Returns an array of FundingResource objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FundingResource
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
