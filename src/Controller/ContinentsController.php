<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/continent')]
class ContinentsController extends AbstractController
{
    #[Route('/', name: 'app_continents')]
    public function index(): Response
    {
        return $this->render('continents/index.html.twig', [
            'controller_name' => 'ContinentsController',
        ]);
    }
}
