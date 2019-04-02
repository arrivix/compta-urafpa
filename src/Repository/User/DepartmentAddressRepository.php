<?php

namespace App\Repository\User;

use App\Entity\User\DepartmentAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DepartmentAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepartmentAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepartmentAddress[]    findAll()
 * @method DepartmentAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartmentAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DepartmentAddress::class);
    }

    // /**
    //  * @return DepartmentAddress[] Returns an array of DepartmentAddress objects
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
    public function findOneBySomeField($value): ?DepartmentAddress
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
