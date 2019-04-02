<?php

namespace App\Repository;

use App\Entity\LabelFormFieldType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LabelFormFieldType|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabelFormFieldType|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabelFormFieldType[]    findAll()
 * @method LabelFormFieldType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabelFormFieldTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LabelFormFieldType::class);
    }

    // /**
    //  * @return LabelFormFieldType[] Returns an array of LabelFormFieldType objects
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
    public function findOneBySomeField($value): ?LabelFormFieldType
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
