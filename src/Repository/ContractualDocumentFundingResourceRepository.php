<?php

namespace App\Repository;

use App\Entity\ContractualDocumentFundingResource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContractualDocumentFundingResource|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractualDocumentFundingResource|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractualDocumentFundingResource[]    findAll()
 * @method ContractualDocumentFundingResource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractualDocumentFundingResourceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContractualDocumentFundingResource::class);
    }

    // /**
    //  * @return ContractualDocumentFundingResource[] Returns an array of ContractualDocumentFundingResource objects
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
    public function findOneBySomeField($value): ?ContractualDocumentFundingResource
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
