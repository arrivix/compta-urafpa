<?php

namespace App\Repository\Document;

use App\Entity\Document\DocumentPage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DocumentPage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocumentPage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocumentPage[]    findAll()
 * @method DocumentPage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentPageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DocumentPage::class);
    }

    // /**
    //  * @return DocumentPage[] Returns an array of DocumentPage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DocumentPage
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
