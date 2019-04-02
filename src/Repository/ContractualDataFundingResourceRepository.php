<?php

namespace App\Repository;

use App\Entity\ContractualDataFundingResource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContractualDataFundingResource|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractualDataFundingResource|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractualDataFundingResource[]    findAll()
 * @method ContractualDataFundingResource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractualDataFundingResourceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContractualDataFundingResource::class);
    }

    // /**
    //  * @return ContractualDataFundingResource[] Returns an array of ContractualDataFundingResource objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContractualDataFundingResource
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
