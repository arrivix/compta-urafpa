<?php

namespace App\Repository\Document;

use App\Entity\Document\LabelFormFieldResult;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LabelFormFieldResult|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabelFormFieldResult|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabelFormFieldResult[]    findAll()
 * @method LabelFormFieldResult[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabelFormFieldResultRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LabelFormFieldResult::class);
    }

    // /**
    //  * @return LabelFormFieldResult[] Returns an array of LabelFormFieldResult objects
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
    public function findOneBySomeField($value): ?LabelFormFieldResult
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
