<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $movie = new Movie();
       $movie -> setTitle('After');
       $movie -> setReleaseYear(2019);
       $movie -> setDescription('Love and romance with ups and downs');
       $movie -> setImagepath('https://s2.r29static.com/bin/entry/554/x,80/2160008/image.jpg');
       $manager -> persist($movie);

      $movie2 = new Movie();
       $movie2 -> setTitle('After we collided');
       $movie2 -> setReleaseYear(2020);
       $movie2 -> setDescription('Love and romance with ups and downs');
       $movie2 -> setImagepath('https://static.wikia.nocookie.net/after/images/6/6e/AWC_Official_Poster.jpg/revision/latest?cb=20200723034525');
       $manager -> persist($movie2);  
     
      $manager ->flush();
    }
}
