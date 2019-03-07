<?php

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\HelloController;

class HelloControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new HelloController();
        $response = $controller->index();
        $contents = $response->getContent();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertContains("Hello world!", $contents);
    }
}
