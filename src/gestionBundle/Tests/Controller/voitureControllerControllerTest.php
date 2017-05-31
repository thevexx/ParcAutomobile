<?php

namespace gestionBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class voitureControllerControllerTest extends WebTestCase
{
    public function testAffichevoiture()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/affiche');
    }

}
