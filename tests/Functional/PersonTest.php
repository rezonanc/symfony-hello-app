<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PersonTest extends WebTestCase
{
    public function testShowPersonReturnsValidResponse()
    {
        $client = static::createClient();

        $client->request('GET', '/person/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testShowPersonReturnsExpectedDemoData()
    {
        $client = static::createClient();

        $client->request('GET', '/person/1');

        $this->assertContains("John Doe", $client->getResponse()->getContent());
    }
}
