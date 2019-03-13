<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainTest extends WebTestCase
{
    public function testMainRouteReturnsValidResponse()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testMainRouteReturnsExpectedWelcomeOutput()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertContains("Hello", $client->getResponse()->getContent());
    }

    public function testMainRouteBundleIntegration()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertContains("from Bundle", $client->getResponse()->getContent());
    }    
}
