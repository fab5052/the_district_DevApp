<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
// use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategorieController extends AbstractController
{
    private $categorieRepo;
    // private $platRepo;

    // public function __construct(CategorieRepository $categorieRepo, PlatRepository $platRepo)
        public function __construct(CategorieRepository $categorieRepo)    {
        $this->categorieRepo = $categorieRepo;
        // $this->platRepo = $platRepo;
        
    }

    #[Route('/categorie', name: 'app_categorie')]
    public function index(): Response
    {
        $categories = $this->categorieRepo->findAll();
        // $plats = $this->platRepo->findAll();

        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',

            'categories' => $categories
            // 'plats'=> $plats
        ]);
    }
}








