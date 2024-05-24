<?php

namespace App\Controller;


use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PlatController extends AbstractController
{
    private $platRepo;

        public function __construct(PlatRepository $platRepo)
            {
        $this->platRepo = $platRepo;
        
    }


    #[Route('/plat', name: 'app_plat')]
    public function index(): Response
    {

        $plats = $this->platRepo->findAll();

        return $this->render('plat/index.html.twig', [
            'controller_name' => 'PlatController',

             'plats'=> $plats
        ]);
    }
}
