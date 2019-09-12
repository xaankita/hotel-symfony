<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/04
 * Time: 12:02
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\CssSelector\CssSelectorConverter;
use App\Entity\Bookings;
use DateTime;

class BookingsnewController extends AbstractController
{
	/**
	 * +      * @Route("/bookings/new")
	 * +      */
	public function index(): Response
	{
		return $this->render('default/bookingsnew.html.twig', [
			'controller_name' => 'BookingsnewController',
		]);
	}
	/**
	 * +      * @Route("/bookings/new1")
	 * +      */
	public function addBooking(): Response
	{
		$entityManager = $this->getDoctrine()->getManager();
		
		$bookings = new Bookings();
		$bookings->setUserid('ankita06');
		$bookings->setName('ankita06');
		$bookings->setEmailid('ankita@gmail.com');
		$date = new DateTime();
		$bookings->setEntrydate($date);
		$bookings->setExitdate($date);
		$bookings->setPhonenumber(1234567890);
		
		// tell Doctrine you want to (eventually) save the Product (no queries yet)
		$entityManager->persist($bookings);
		
		// actually executes the queries (i.e. the INSERT query)
		$entityManager->flush();
		
		return new Response('Saved new product with id '.$bookings->getId());
	}
	
	/*return $this->render('default/bookings.html.twig', [
		'controller_name' => 'BookingsController',
	]);*/
	
}
