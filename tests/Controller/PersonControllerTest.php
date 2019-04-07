<?php

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\PersonController;
use App\Entity\Person;

class PersonControllerTest extends TestCase
{
    // R from CRUD
    public function testCanShowPerson()
    {
        $person = new Person();
        $person->setFirstName('TestFirst');
        $person->setLastName('TestLast');

        $controller = new PersonController();
        $response = $controller->show($person);
        $contents = $response->getContent();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertContains("TestFirst TestLast", $contents);
    }

    // D from CRUD
    public function testCanRemovePerson()
    {
        $person = new Person();
        $person->setFirstName('TestFirst');
        $person->setLastName('TestLast');

        // TODO: Find a way to overcome doctrine and test this w/o hitting the database

        $controller = new PersonController();
        $response = $controller->remove($person);
        $contents = $response->getContent();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertContains("TestFirst TestLast removed", $contents);
    }
}
