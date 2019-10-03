<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/10/03
 * Time: 13:10
 */
namespace App\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;



class BookingTest extends WebTestCase
{
	public function testShowPost()
	{
		$client = static::createClient();
		
		$client->request('GET', '/bookings/new1');
		
		$this->assertEquals(200, $client->getResponse()->getStatusCode());
		$this->assertSelectorTextContains('html h1.title', 'Bookings done on this page');
	}
	
}
