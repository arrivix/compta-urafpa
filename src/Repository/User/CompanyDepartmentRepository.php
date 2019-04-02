<?php

namespace App\Repository\User;

use App\Entity\User\CompanyDepartment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CompanyDepartment|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompanyDepartment|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompanyDepartment[]    findAll()
 * @method CompanyDepartment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompanyDepartmentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CompanyDepartment::class);
    }

    // /**
    //  * @return CompanyDepartment[] Returns an array of CompanyDepartment objects
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
    public function findOneBySomeField($value): ?CompanyDepartment
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
