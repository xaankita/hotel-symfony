<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019/09/04
 * Time: 12:02
 */

namespace App\Controller;


#use http\Env\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\CssSelector\CssSelectorConverter;

class RoomsController extends AbstractController
{
	/**
	 * +      * @Route("/rooms")
	 * +      */
	public function index(): Response
	{
		return $this->render('default/rooms.html.twig', [
			'controller_name' => 'RoomsController',
		]);
	}
}