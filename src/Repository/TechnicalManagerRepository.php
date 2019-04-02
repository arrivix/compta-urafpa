<?php

namespace App\Repository;

use App\Entity\TechnicalManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TechnicalManager|null find($id, $lockMode = null, $lockVersion = null)
 * @method TechnicalManager|null findOneBy(array $criteria, array $orderBy = null)
 * @method TechnicalManager[]    findAll()
 * @method TechnicalManager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechnicalManagerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TechnicalManager::class);
    }

    // /**
    //  * @return TechnicalManager[] Returns an array of TechnicalManager objects
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
    public function findOneBySomeField($value): ?TechnicalManager
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
