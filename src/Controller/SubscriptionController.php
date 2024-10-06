<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SubscriptionController extends AbstractController
{
	#[Route('/subscriptions', name: 'show_subscriptions')]
	public function discover_category(): Response
	{
		return $this->render('subscription/abonnements.html.twig');
	}
}
