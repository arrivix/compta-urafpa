<?php

namespace App\Repository;

use App\Entity\LaboratoryProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LaboratoryProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method LaboratoryProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method LaboratoryProject[]    findAll()
 * @method LaboratoryProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LaboratoryProjectRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LaboratoryProject::class);
    }

    // /**
    //  * @return LaboratoryProject[] Returns an array of LaboratoryProject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LaboratoryProject
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
