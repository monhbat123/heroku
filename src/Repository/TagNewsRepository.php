<?php

namespace App\Repository;

use App\Entity\TagNews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TagNews|null find($id, $lockMode = null, $lockVersion = null)
 * @method TagNews|null findOneBy(array $criteria, array $orderBy = null)
 * @method TagNews[]    findAll()
 * @method TagNews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagNewsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TagNews::class);
    }

    // /**
    //  * @return TagNews[] Returns an array of TagNews objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TagNews
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
