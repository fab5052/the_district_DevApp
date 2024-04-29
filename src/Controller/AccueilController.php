<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AccueilController extends AbstractController
{
    private $categorieRepo;
    private $platRepo;

    public function __construct(CategorieRepository $categorieRepo, PlatRepository $platRepo)
    {
        $this->categorieRepo = $categorieRepo;
        $this->platRepo = $platRepo;
        
    }


    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {

        $categories = $this->categorieRepo->findAll();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',

            'categories' => $categories
        ]);
    }
}
