<?php

namespace App\Repository\User;

use App\Entity\User\DepartmentType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DepartmentType|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepartmentType|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepartmentType[]    findAll()
 * @method DepartmentType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartmentTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DepartmentType::class);
    }

    // /**
    //  * @return DepartmentType[] Returns an array of DepartmentType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DepartmentType
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
