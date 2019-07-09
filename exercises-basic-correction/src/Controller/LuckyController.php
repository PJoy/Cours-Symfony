<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberAction($max = 100)
    {
        $number = random_int(0, $max);

        return $this->render('lucky/index.html.twig', [
            'number' => $number,
        ]);
    }
}