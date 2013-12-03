<?php

namespace Blog\ExampleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Enrico');

        $this->assertTrue($crawler->filter('html:contains("Hello Enrico")')->count() > 0);
    }
}
