<?php

namespace App\Repository;

use App\Entity\ContribRules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContribRules|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContribRules|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContribRules[]    findAll()
 * @method ContribRules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContribRulesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContribRules::class);
    }

    // /**
    //  * @return ContribRules[] Returns an array of ContribRules objects
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
    public function findOneBySomeField($value): ?ContribRules
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
