<?php

namespace App\DataFixtures;

use App\Entity\Format;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class FormatFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $format = new Format();
        $format->setName('DIGITAL - COULEUR');
        $format->setDescription('Un dessin digital en couleur');
        $manager->persist($format);

        $manager->flush();
    }
}
