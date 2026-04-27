<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\CategorySearch;
use App\Entity\PriceSearch;
use App\Entity\PropertySearch;
use App\Form\ArticleType;
use App\Form\CategorySearchType;
use App\Form\CategoryType;
use App\Form\PriceSearchType;
use App\Form\PropertySearchType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/', name: 'article_index', methods: ['GET'])]
    #[Route('/', name: 'article_list', methods: ['GET'])]
    public function index(Request $request, ArticleRepository $articleRepository): Response
    {
        $propertySearch = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $propertySearch);
        $form->handleRequest($request);

        $articles = $articleRepository->searchByNom($propertySearch->getNom());

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/save', name: 'article_save_demo', methods: ['GET'])]
    public function saveDemo(): Response
    {
        $article = new Article();
        $article->setNom('Article de demonstration');
        $article->setPrix('100');

        $this->entityManager->persist($article);
        $this->entityManager->flush();

        $this->addFlash('success', 'Article ajoute avec succes.');

        return $this->redirectToRoute('article_index');
    }

    #[Route('/article/new', name: 'article_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($article);
            $this->entityManager->flush();

            $this->addFlash('success', 'Article cree avec succes.');

            return $this->redirectToRoute('article_index');
        }

        return $this->render('articles/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/category/newCat', name: 'new_category', methods: ['GET', 'POST'])]
    public function newCategory(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($category);
            $this->entityManager->flush();

            $this->addFlash('success', 'Categorie creee avec succes.');

            return $this->redirectToRoute('article_index');
        }

        return $this->render('articles/newCategory.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/search/category', name: 'article_search_category', methods: ['GET'])]
    public function searchByCategory(Request $request, ArticleRepository $articleRepository): Response
    {
        $categorySearch = new CategorySearch();
        $form = $this->createForm(CategorySearchType::class, $categorySearch);
        $form->handleRequest($request);

        $articles = [];

        if ($form->isSubmitted() && $form->isValid() && $categorySearch->getCategory() !== null) {
            $articles = $articleRepository->searchByCategory($categorySearch->getCategory());
        }

        return $this->render('articles/searchCategory.html.twig', [
            'articles' => $articles,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/search/price', name: 'article_search_price', methods: ['GET'])]
    public function searchByPrice(Request $request, ArticleRepository $articleRepository): Response
    {
        $priceSearch = new PriceSearch();
        $form = $this->createForm(PriceSearchType::class, $priceSearch);
        $form->handleRequest($request);

        $articles = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $articles = $articleRepository->searchByPriceRange(
                $priceSearch->getMinPrice(),
                $priceSearch->getMaxPrice()
            );
        }

        return $this->render('articles/searchPrice.html.twig', [
            'articles' => $articles,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/{id}', name: 'article_show', methods: ['GET'])]
    public function show(Article $article): Response
    {
        return $this->render('articles/show.html.twig', [
            'article' => $article,
        ]);
    }

    #[Route('/article/edit/{id}', name: 'article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Article modifie avec succes.');

            return $this->redirectToRoute('article_index');
        }

        return $this->render('articles/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/article/delete/{id}', name: 'article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete_article_'.$article->getId(), (string) $request->request->get('_token'))) {
            $this->entityManager->remove($article);
            $this->entityManager->flush();

            $this->addFlash('success', 'Article supprime avec succes.');
        }

        return $this->redirectToRoute('article_index');
    }
}
