<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Person;

class PersonFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $names = [
            ['John', 'Doe'],
            ['Kenda', 'Helberg'],
            ['Rene', 'Goupil'],
            ['Salome', 'Winkel'],
        ];

        foreach ($names as $name) {
            list($firstName, $lastName) = $name;

            $person = new Person();
            $person->setFirstName($firstName);
            $person->setLastName($lastName);
            $manager->persist($person);
        }

        $manager->flush();
    }
}
