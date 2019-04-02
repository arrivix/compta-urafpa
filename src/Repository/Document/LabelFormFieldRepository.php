<?php

namespace App\Repository\Document;

use App\Entity\Document\LabelFormField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LabelFormField|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabelFormField|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabelFormField[]    findAll()
 * @method LabelFormField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabelFormFieldRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LabelFormField::class);
    }

    // /**
    //  * @return LabelFormField[] Returns an array of LabelFormField objects
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
    public function findOneBySomeField($value): ?LabelFormField
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
