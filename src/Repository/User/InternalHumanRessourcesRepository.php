<?php

namespace App\Repository\User;

use App\Entity\User\InternalHumanRessources;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InternalHumanRessources|null find($id, $lockMode = null, $lockVersion = null)
 * @method InternalHumanRessources|null findOneBy(array $criteria, array $orderBy = null)
 * @method InternalHumanRessources[]    findAll()
 * @method InternalHumanRessources[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InternalHumanRessourcesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InternalHumanRessources::class);
    }

    // /**
    //  * @return InternalHumanRessources[] Returns an array of InternalHumanRessources objects
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
    public function findOneBySomeField($value): ?InternalHumanRessources
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
