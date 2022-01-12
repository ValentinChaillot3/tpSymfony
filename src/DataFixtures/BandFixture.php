<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Band;

class BandFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      $b1 = new Band();
      $b1 ->setName('Imagine Dragons')
          ->setPicture('imagineDragons.jpg')
          ->addMember($this->getReference(ArtistFixture::ARTIST_USER_REFERENCE))
          ->addMember($this->getReference(ArtistFixture::ARTIST_USER_REFERENCE2));
              $manager->persist($b1);
        $manager->flush();
    }
    public function getDependencies()
   {
       return [
           ArtistFixture::class,
       ];
   }
}
