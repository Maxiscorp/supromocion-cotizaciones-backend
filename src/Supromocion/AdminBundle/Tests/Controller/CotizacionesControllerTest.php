<?php

namespace Supromocion\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CotizacionesControllerTest extends WebTestCase
{
    public function testFinalizadas()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/finalizadas');
    }

}
