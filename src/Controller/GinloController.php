<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GinloController extends AbstractController
{
    #[Route('/ginlo', name: 'app_ginlo')]
    public function index(): Response
    {
        return $this->render('ginlo/index.html.twig', [
            'controller_name' => 'GinloController',
        ]);
    }
}
