<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('Thor');
        $movie->setReleaseYear(2008);
        $movie->setDescription('Thunder');
        $movie->setImagePath('https://techplanet.today/storage/posts/2022/06/73/62ba7fca68551.jpg');

        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $movie->addActor($this->getReference('actor_3'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Groot');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('I am Groot');
        $movie2->setImagePath('https://akarachannel.com/wp-content/uploads/2022/06/FUgH_3xVEAAgVjw.jpeg');

        $movie2->addActor($this->getReference('actor_4'));
        $manager->persist($movie2);

        $manager->flush();
    }
}

