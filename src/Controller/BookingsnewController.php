<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/04
 * Time: 12:02
 */

namespace App\Controller;

use App\Form\BookingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\CssSelector\CssSelectorConverter;
use App\Entity\Bookings;
use Doctrine\ORM\EntityManagerInterface;
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
	
	public function new(Request $request)
	{
		$bookings = new Bookings();
		$form = $this->createForm(BookingType::class, $bookings, ['method' => 'GET']);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$article = $form->getData();
			$doc = $this->getDoctrine()->getManager();
			$doc->persist($bookings);
			$doc->flush();
			return new RedirectResponse('/bookings/new1');
		}
		return $this->render("bookingsnew.html.twig", [
			'form' => $form->createView(),
		]);
	}
}
