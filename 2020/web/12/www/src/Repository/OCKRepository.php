<?php

namespace App\Repository;

use App\Entity\OCK;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OCK|null find($id, $lockMode = null, $lockVersion = null)
 * @method OCK|null findOneBy(array $criteria, array $orderBy = null)
 * @method OCK[]    findAll()
 * @method OCK[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OCKRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OCK::class);
    }

    // /**
    //  * @return OCK[] Returns an array of OCK objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OCK
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
