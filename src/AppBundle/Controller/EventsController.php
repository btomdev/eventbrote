<?php

namespace AppBundle\Controller;

use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* 
*/
class EventsController extends Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }

	/**
	* @Route("/events")
	**/
	public function indexAction()
	{
		$currentTime = (new DateTime)->format('d/m/y H:i:s');

		$events = [
			'Papa', 
			'Maman', 
			'Télyo', 
			'Lya',
		];

		return $this->render('events/index.html.twig', compact('events', 'currentTime'));
	}
}