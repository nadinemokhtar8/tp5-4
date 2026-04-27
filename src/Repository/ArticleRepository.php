<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * @return Article[]
     */
    public function searchByNom(?string $nom): array
    {
        $queryBuilder = $this->createQueryBuilder('a')
            ->leftJoin('a.category', 'c')
            ->addSelect('c')
            ->orderBy('a.id', 'DESC');

        if ($nom !== null && $nom !== '') {
            $queryBuilder
                ->andWhere('a.nom LIKE :nom')
                ->setParameter('nom', '%'.$nom.'%');
        }

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * @return Article[]
     */
    public function searchByCategory(?Category $category): array
    {
        $queryBuilder = $this->createQueryBuilder('a')
            ->leftJoin('a.category', 'c')
            ->addSelect('c')
            ->orderBy('a.id', 'DESC');

        if ($category !== null) {
            $queryBuilder
                ->andWhere('a.category = :category')
                ->setParameter('category', $category);
        }

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * @return Article[]
     */
    public function searchByPriceRange(?int $minPrice, ?int $maxPrice): array
    {
        $queryBuilder = $this->createQueryBuilder('a')
            ->leftJoin('a.category', 'c')
            ->addSelect('c')
            ->orderBy('a.id', 'DESC');

        if ($minPrice !== null) {
            $queryBuilder
                ->andWhere('a.prix >= :minPrice')
                ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice !== null) {
            $queryBuilder
                ->andWhere('a.prix <= :maxPrice')
                ->setParameter('maxPrice', $maxPrice);
        }

        return $queryBuilder->getQuery()->getResult();
    }
}
