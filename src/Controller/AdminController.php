<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController 
{
	#[Route('/admin', name: 'admin_management')]
	public function index(): Response
	{
		return $this->render('admin/admin.html.twig');
	}

	#[Route('/admin/movie', name: 'movie_management')]
	public function movie_list(): Response
	{
		return $this->render('admin/admin_films.html.twig');
	}

	#[Route('/admin/movie', name: 'user_management')]
	public function user_list(): Response
	{
		return $this->render('admin/admin_users.html.twig');
	}

	#[Route('/admin/movie/add_movie', name: 'add_movie')]
	public function add_movie(): Response
	{
		return $this->render('admin/admin_add_films.html.twig');
	}
	
}