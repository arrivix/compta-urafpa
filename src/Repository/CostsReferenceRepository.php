<?php

namespace App\Repository;

use App\Entity\CostsReference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CostsReference|null find($id, $lockMode = null, $lockVersion = null)
 * @method CostsReference|null findOneBy(array $criteria, array $orderBy = null)
 * @method CostsReference[]    findAll()
 * @method CostsReference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CostsReferenceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CostsReference::class);
    }

    // /**
    //  * @return CostsReference[] Returns an array of CostsReference objects
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
    public function findOneBySomeField($value): ?CostsReference
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
