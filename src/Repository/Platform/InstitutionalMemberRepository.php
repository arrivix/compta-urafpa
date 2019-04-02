<?php

namespace App\Repository\Platform;

use App\Entity\Platform\InstitutionalMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InstitutionalMember|null find($id, $lockMode = null, $lockVersion = null)
 * @method InstitutionalMember|null findOneBy(array $criteria, array $orderBy = null)
 * @method InstitutionalMember[]    findAll()
 * @method InstitutionalMember[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InstitutionalMemberRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InstitutionalMember::class);
    }

    // /**
    //  * @return InstitutionalMember[] Returns an array of InstitutionalMember objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InstitutionalMember
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
