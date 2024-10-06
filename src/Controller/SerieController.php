<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SerieController extends AbstractController
{
	#[Route('/serie/{name}', name: 'serie_list')]
	public function index(string $name): Response
	{
		return $this->render('serie/detail_serie.html.twig', [
			'name' => $name
		]);
	}
}
