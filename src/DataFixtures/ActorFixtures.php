<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $actor= new Actor();
       $actor->setName('Josephine');
       $manager->persist($actor);

       $actor2 = new Actor();
       $actor2->setName('Josephine');
       $manager->persist($actor2);

        $manager -> flush();
    
    }
}
