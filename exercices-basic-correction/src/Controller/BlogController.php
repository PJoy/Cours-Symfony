<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{_locale}/{year}/{title}", name="blog_display", requirements={"_locale" = "en|fr", "year"="\d\d\d\d", "title"="[a-zA-Z0-9-]*"})
     * @Route("/blog/{year}/{title}", requirements={"year"="\d{4}", "title"="[a-zA-Z0-9-]*"})
     */
    public function blogAction($_locale = 'fr', $year, $title)
    {
        if ($_locale === 'en') {
            return $this->render('blog/blog-en.html.twig', [
                'locale' => $_locale,
                'year' => $year,
                'title' => $title,
            ]);
        } elseif ($_locale === 'fr') {
            return $this->render('blog/blog-fr.html.twig', [
                'locale' => $_locale,
                'year' => $year,
                'title' => $title,
            ]);
        }
    }
}
