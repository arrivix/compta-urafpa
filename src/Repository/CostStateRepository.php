<?php

namespace App\Repository;

use App\Entity\CostState;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CostState|null find($id, $lockMode = null, $lockVersion = null)
 * @method CostState|null findOneBy(array $criteria, array $orderBy = null)
 * @method CostState[]    findAll()
 * @method CostState[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CostStateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CostState::class);
    }

    // /**
    //  * @return CostState[] Returns an array of CostState objects
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
    public function findOneBySomeField($value): ?CostState
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
