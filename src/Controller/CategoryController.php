<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
	#[Route('/discover', name: 'movie_discover')]
	public function discover_category(): Response
	{
		return $this->render('category/discover.html.twig');
	}

	#[Route('/category/{name}', name: 'show_category')]
	public function show_category(string $name): Response
	{
		return $this->render('/category/category.html.twig', [
			'name' => $name
		]);
	}
}
