<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/10/09
 * Time: 11:04
 */

namespace App\Tests\unit;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
//use Liip\FunctionalTestBundle\Test\WebTestCase;
class ApplicationAvailabilityFunctionalTest extends WebTestCase
{
    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);
        
        $this->assertResponseIsSuccessful();
    }
    
    public function urlProvider()
    {
        yield ['/blog'];
        yield ['/rooms'];
        yield ['/facilities'];
        yield ['/bookings'];
        yield ['/contact'];
       
        
    }
    
}