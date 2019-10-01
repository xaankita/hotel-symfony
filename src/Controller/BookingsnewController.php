<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/04
 * Time: 12:02
 */

namespace App\Controller;

use App\Form\BookingType;
use PhpParser\Builder\Method;
use function PHPSTORM_META\type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\CssSelector\CssSelectorConverter;
use App\Entity\Bookings;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;
use Symfony\Component\Yaml\Tests\B;


class BookingsnewController extends AbstractController
{
	
	public function index(): Response
	{
		return $this->render('default/bookingsnew.html.twig', [
			'controller_name' => 'BookingsnewController',
		]);
	}
	
	
	/**
	 * +      * @Route("/bookings/new1")
	 * +      */
	public function create(Request $request)
	{
		// bookings form will be displayed
		
		$bookings = new Bookings();
//		$bookings->setUserid('12345');
//		$bookings->setName('ankita06');
//		$bookings->setEmailid('ankita@gmail.com');
//		$date = new DateTime();
//		$bookings->setEntrydate($date);
//		$bookings->setExitdate($date);
//		$bookings->setPhonenumber(1234567890);


//			->add('name', NameType::class)
//			->add('emailid', EmailType::class)
//			->add('entrydate', EntryType::class)
//			->add('exitdate', ExitType::class)
//			->add('phonenumber', PhoneNumberType::class)
//			->add('save', SubmitType::class, ['label' => 'Submit']);
		$form = $this->createForm(BookingType::class, $bookings);
		if ($request->isMethod(Request::METHOD_POST)) {
			$form->handleRequest($request);
			if ($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($bookings);
				$em->flush();
				return new Response("This is the id" . $bookings->getId());
				
				
			}
		}
		//return new Response('Saved new product with id '.$bookings->getId());
		
		return $this->render('default/bookingsnew.html.twig', [
			'form' => $form->createView(),
		]);
		
		
	}
	
	
	/**
	 * @Route("/bookings/list", name="booking_list")
	 */
	
	public function list()
	{
		
		$repository = $this->getDoctrine()->getRepository(Bookings::class);
		$bookings = $repository->findAll();
		
		return $this->render('default/bookingslist.html.twig', array(
			'booking' => $bookings));
		
		//"param1" => "test",
		
		
	}
	
	/**
	 * @Route("/bookings/{id}", name="booking_show")
	 */
	
	public function show($id)
	{
		$bookings = $this->getDoctrine()
			->getRepository(Bookings::class)
			->find($id);
		
		if (!$bookings) {
			throw $this->createNotFoundException(
				'No product found for id ' . $id
			);
		}
		
		return new Response('Name: ' . $bookings->getName() . '<br/>Email id: ' . $bookings->getEmailid() . '<br/>Phone number: ' . $bookings->getPhonenumber());
	}
	
	/**
	 * @Route("/bookings/delete/{id}", name="booking_delete")
	 *
	 */
	public function delete($id)
	{
		$em = $this->getDoctrine()->getManager();
		$repository = $em->getRepository(Bookings::class);
		$delete = $repository->find($id);
		$em->remove($delete);
		$em->flush();
		return new RedirectResponse('/bookings/list');
		
	}
	/**
	 * @Route("bookings/edit/{id} ", name="booking_edit")
	 */
	public function edit(Request $request, $id)
	{
		$doc = $this->getDoctrine()->getManager();
		$repository = $doc->getRepository(Bookings::class);
		$booking = $repository->find($id);
		$form = $this->createForm(BookingType::class, $booking, ['method' => 'GET']);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$booking = $form->getData();
			$doc = $this->getDoctrine()->getManager();
			$doc->persist($booking);
			$doc->flush();
			return new RedirectResponse('/bookings/list');
		}
		return $this->render('default/bookingsedit.html.twig',[
			'form' => $form->createView(),
		]);
	}
	
}

