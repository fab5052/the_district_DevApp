<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Entity\Commande;
use App\Entity\Detail;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MenuController extends AbstractController
{
    public function index(EntityManagerInterface $em): Response
    {
        $categories = $em->getRepository(Categorie::class)->findAll();
        $plats = $em->getRepository(Plat::class)->findAll();


        return $this->render('menu/index.html.twig', [
            'controller_name' => 'MenuController',

            'categories' => $categories,
            'plats' => $plats,


        ]);
    }


    public function categorie(EntityManagerInterface $em): Response
    {
        $categories = $em->getRepository(Categorie::class)->findAll();

        return $this->render('menu/categorie.html.twig', [
            'controller_name' => 'MenuController',

            'categories' => $categories,
        ]);
    }

    public function plat(EntityManagerInterface $em): Response
    {
        $plats = $em->getRepository(Plat::class)->findAll();

        return $this->render('menu/plat.html.twig', [
            'controller_name' => 'MenuController',

            'plats' => $plats,
        ]);
    }


    public function plat_cat(EntityManagerInterface $em, Request $request, string $libelle): Response
    {
        $libelle = $request->attributes->get('libelle');


        $categorie = $em->getRepository(Categorie::class)->findOneBy(['libelle' => $libelle]);


        $plats = $categorie->getPlats();

        return $this->render('menu/plat_cat.html.twig', [
            'controller_name' => 'MenuController',
            'categorie' => $categorie,
            'plats' => $plats,

        ]);
    }
}





//     private $categorieRepo;
//     // private $platRepo;

//     // public function __construct(CategorieRepository $categorieRepo, PlatRepository $platRepo)
//         public function __construct(CategorieRepository $categorieRepo)    {
//         $this->categorieRepo = $categorieRepo;
//         // $this->platRepo = $platRepo;
        
//     }

//     // #[Route('/categorie', name: 'app_categorie')]
//     public function index(): Response
//     {
//         $categories = $this->categorieRepo->findAll();
//         // $plats = $this->platRepo->findAll();

//         return $this->render('categorie/index.html.twig', [
//             'controller_name' => 'CategorieController',

//             'categories' => $categories
//             // 'plats'=> $plats
//         ]);
//     }
// }








