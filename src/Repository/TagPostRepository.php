<?php

namespace App\Repository;

use App\Entity\TagPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TagPost>
 *
 * @method TagPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method TagPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method TagPost[]    findAll()
 * @method TagPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TagPost::class);
    }

//    /**
//     * @return TagPost[] Returns an array of TagPost objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TagPost
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
