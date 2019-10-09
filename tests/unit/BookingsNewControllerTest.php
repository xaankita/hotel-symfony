<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/10/03
 * Time: 13:10
 */
namespace App\Tests\unit;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
//use Liip\FunctionalTestBundle\Test\WebTestCase;



class BookingsNewControllerTest extends KernelTestCase
{
    public function testShowPost()
    {
        $client = $this->createClient();
        
        $client->request('GET', '/bookings');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
