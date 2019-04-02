<?php

namespace App\Repository\Platform;

use App\Entity\Platform\ScientificArea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ScientificArea|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScientificArea|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScientificArea[]    findAll()
 * @method ScientificArea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScientificAreaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ScientificArea::class);
    }

    // /**
    //  * @return ScientificArea[] Returns an array of ScientificArea objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ScientificArea
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
