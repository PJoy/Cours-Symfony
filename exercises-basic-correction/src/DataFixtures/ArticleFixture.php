<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            $article = new Article();
            $article->setTitle("Mon titre $i");
            $article->setContent("AZERTY");
            $article->setCreatedAt(new \DateTime('01/01/2019'));
            $article->setUpdatedAt(new \DateTime('01/01/2019'));
            $article->setIsEnabled(TRUE);
            $article->setNbLike(0);

            $manager->persist($article);
        }

        $manager->flush();
    }
}
