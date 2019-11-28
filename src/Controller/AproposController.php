<?php

namespace App\Controller;

use App\Entity\Apropos;
use App\Repository\AproposRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/apropos")
 */
class AproposController extends AbstractController {
	/**
	 * @Route("/", name="apropos_index", methods={"GET"})
	 */
	public function index(AproposRepository $aproposRepository): Response {
		return $this->render('apropos/index.html.twig', );
	}
}