<?php

namespace App\Repository;

use App\Entity\STC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method STC|null find($id, $lockMode = null, $lockVersion = null)
 * @method STC|null findOneBy(array $criteria, array $orderBy = null)
 * @method STC[]    findAll()
 * @method STC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class STCRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, STC::class);
    }

    // /**
    //  * @return STC[] Returns an array of STC objects
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
    public function findOneBySomeField($value): ?STC
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
