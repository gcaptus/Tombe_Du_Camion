<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddressControllerControllerTest extends WebTestCase
{
    public function testAddress()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/address');
    }

}
