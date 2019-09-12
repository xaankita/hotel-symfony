<?php

namespace App\Repository;

use App\Entity\BookingsNew;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BookingsNew|null find($id, $lockMode = null, $lockVersion = null)
 * @method BookingsNew|null findOneBy(array $criteria, array $orderBy = null)
 * @method BookingsNew[]    findAll()
 * @method BookingsNew[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookingsNewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BookingsNew::class);
    }

    // /**
    //  * @return BookingsNew[] Returns an array of BookingsNew objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BookingsNew
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
