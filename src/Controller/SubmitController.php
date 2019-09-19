<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/19
 * Time: 10:47
 */

namespace App\Controller;
use App\Form\BookingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\CssSelector\CssSelectorConverter;
use App\Entity\Bookings;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

class SubmitController extends AbstractController
{
	
	public function index(): Response
	{
		return $this->render('default/Submit.html.twig', [
			'controller_name' => 'SubmitController',
		]);
	}
	
	public function new(Request $request)
	{
		
		
		if ($form->isSubmitted() && $form->isValid()) {
			$submit = $form->getData();
			$doc = $this->getDoctrine()->getManager();
			$doc->persist($submit);
			$doc->flush();
			
		}
		return $this->render("Submit.html.twig",[
			'form' => $form->createView(),
		]);
	}
}