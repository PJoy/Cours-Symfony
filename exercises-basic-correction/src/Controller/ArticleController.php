<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article/list", name="list_articles")
     */
    public function listAction() {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        return $this->render('article/list.html.twig',  ['articles'=> $articles]);
    }

    /**
     * @Route("/article/{id}", name="show_article", requirements={"id" = "\d+"})
     */
    public function showArticleAction($id) {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        return $this->render('article/show.html.twig',  ['article'=> $article]);
    }

    /**
     * @Route("/article/new", name="create_article")
     */
    public function createArticleAction(Request $request) {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('show_article', array('id' => $article->getId()));
        }

        return $this->render('article/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/article/update/{id}", name="update_article", requirements={"id" = "\d+"})
     */
    public function updateArticleAction($id, Request $request) {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('show_article', array('id' => $article->getId()));
        }

        return $this->render('article/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder($article)
            ->setAction($this->generateUrl('delete_article', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->add('delete', SubmitType::class)
            ->getForm();
    }

    /**
     * @Route("/article/delete/{id}", name="delete_article", requirements={"id" = "\d+"})
     */
    public function updateDeleteAction($id, Request $request) {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        $form = $this->createDeleteForm($article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();

            return $this->redirectToRoute('list_articles');
        }

        return $this->render('article/delete.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
