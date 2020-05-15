<?php

namespace App\Repository;

use App\Entity\CharacterDc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CharacterDc|null find($id, $lockMode = null, $lockVersion = null)
 * @method CharacterDc|null findOneBy(array $criteria, array $orderBy = null)
 * @method CharacterDc[]    findAll()
 * @method CharacterDc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CharacterDcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CharacterDc::class);
    }

    // /**
    //  * @return CharacterDc[] Returns an array of CharacterDc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CharacterDc
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
