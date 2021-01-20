<?php

namespace App\Repository;

use App\Entity\PLA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PLA|null find($id, $lockMode = null, $lockVersion = null)
 * @method PLA|null findOneBy(array $criteria, array $orderBy = null)
 * @method PLA[]    findAll()
 * @method PLA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PLARepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PLA::class);
    }

    // /**
    //  * @return PLA[] Returns an array of PLA objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PLA
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
