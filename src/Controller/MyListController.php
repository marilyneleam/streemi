<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MyListController extends AbstractController
{
	#[Route('/lists', name: 'show_my_list')]
	public function discover_category(): Response
	{
		return $this->render('my_list/lists.html.twig');
	}
}
