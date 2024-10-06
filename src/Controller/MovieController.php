<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
	#[Route('/movie/{name}', name: 'movie_list')]
	public function index(string $name): Response
	{
		return $this->render('movie/detail.html.twig', [
			'name' => $name
		]);
	}
}
