<?php

namespace App\Repository\Document;

use App\Entity\Document\LabelForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LabelForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabelForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabelForm[]    findAll()
 * @method LabelForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabelFormRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LabelForm::class);
    }

    // /**
    //  * @return LabelForm[] Returns an array of LabelForm objects
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
    public function findOneBySomeField($value): ?LabelForm
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
