<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthController extends AbstractController
{
	#[Route('/login', name: 'login')]
	public function index(): Response
	{
		return $this->render('auth/login.html.twig');
	}

	#[Route('/register', name: 'register')]
	public function register(): Response
	{
		return $this->render('auth/register.html.twig');
	}

	#[Route('/logout', name: 'logout')]
	public function logout(): Response
	{
		return new Response('Logout');
	}

	#[Route('/forgot', name: 'forgot_password')]
	public function forgotPassword(): Response
	{
		return $this->render('auth/forgot.html.twig');
	}

	#[Route('/confirm', name: 'confirm_account')]
	public function confirm(): Response
	{
		return $this->render('auth/confirm.html.twig');
	}
}
