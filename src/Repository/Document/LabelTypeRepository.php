<?php

namespace App\Repository\Document;

use App\Entity\Document\LabelType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LabelType|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabelType|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabelType[]    findAll()
 * @method LabelType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabelTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LabelType::class);
    }

    // /**
    //  * @return LabelType[] Returns an array of LabelType objects
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
    public function findOneBySomeField($value): ?LabelType
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
