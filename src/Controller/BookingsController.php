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

class BookingsController extends AbstractController
{
	/**
	 * +      * @Route("/bookings")
	 * +      */
	public function index(): Response
	{
		return $this->render('default/bookings.html.twig', [
			'controller_name' => 'BookingsController',
		]);
	}
}
