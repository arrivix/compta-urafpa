<?php

namespace App\Repository\User;

use App\Entity\User\ContactPhone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactPhone|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactPhone|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactPhone[]    findAll()
 * @method ContactPhone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactPhoneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactPhone::class);
    }

    // /**
    //  * @return ContactPhone[] Returns an array of ContactPhone objects
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
    public function findOneBySomeField($value): ?ContactPhone
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
