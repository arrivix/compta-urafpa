<?php

namespace App\Repository\User;

use App\Entity\User\ContactMail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContactMail|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactMail|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactMail[]    findAll()
 * @method ContactMail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactMailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContactMail::class);
    }

    // /**
    //  * @return ContactMail[] Returns an array of ContactMail objects
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
    public function findOneBySomeField($value): ?ContactMail
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
