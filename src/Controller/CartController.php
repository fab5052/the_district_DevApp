<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Categorie;
use App\Entity\Plat;
use App\Repository\CommandeRepository;
use App\Repository\CategorieRepository;
use App\Repository\PlatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


    #[IsGranted("ROLE_USER")]
#[Route('/cart', name: 'cart_')]
class CartController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SessionInterface $session, PlatRepository $platRepository)
    {
        $panier = $session->get('panier', []);

        // On initialise des variables
        $data = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $plat = $platRepository->find($id);

            if ($plat) {
                $data[] = [
                    'plat' => $plat,
                    'quantite' => $quantite
                ];
                $total += $plat->getPrix() * $quantite;
            }
        }
        
        return $this->render('cart/index.html.twig', compact('data', 'total'));
    }

    #[Route('/add/{id}', name: 'add')]
    public function add(Plat $plat, SessionInterface $session)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
     
        // On récupère l'id du produit
        $id = $plat->getId();

        // On récupère le panier existant
        $panier = $session->get('panier', []);

        // On ajoute le produit dans le panier s'il n'y est pas encore
        // Sinon on incrémente sa quantité
        if (empty($panier[$id])) {
            $panier[$id] = 1;
        } else {
            $panier[$id]++;
        }

        $session->set('panier', $panier);
        
        // On redirige vers la page du panier
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/validation', name: 'validation')]
    public function validation( EntityManagerInterface $entityManagerInterface, SessionInterface $session)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        // On récupère le panier existant
        $panier = $session->get('panier', []);

        // On crée une nouvelle commande
        $commande = new Commande();

        foreach ($panier as $id => $quantite) {
            $plat = $entityManagerInterface->getRepository(Plat::class)->find($id);

            if ($plat) {
                // On ajoute chaque plat à la commande
                // Assurez-vous d'avoir une relation entre Commande et Plat dans votre entité Commande
               // $commande->addPlat($plat, $quantite);
            }
        }

        // On persiste la commande
        $entityManagerInterface->persist($commande);
        $entityManagerInterface->flush();

        // On vide le panier
        $session->remove('panier');

        // On ajoute un message flash et on redirige
        $this->addFlash('success', 'Commande validée avec succès');
        
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/remove/{id}', name: 'remove')]
    public function remove(Plat $plat, SessionInterface $session)
    {
        // On récupère l'id du produit
        $id = $plat->getId();

        // On récupère le panier existant
        $panier = $session->get('panier', []);

        // On retire le produit du panier s'il n'y a qu'un exemplaire
        // Sinon on décrémente sa quantité
        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        }

        $session->set('panier', $panier);
        
        // On redirige vers la page du panier
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(Plat $plat, SessionInterface $session)
    {
        // On récupère l'id du produit
        $id = $plat->getId();

        // On récupère le panier existant
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);
        
        // On redirige vers la page du panier
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/empty', name: 'empty')]
    public function empty(SessionInterface $session)
    {
        $session->remove('panier');

        return $this->redirectToRoute('cart_index');
    }
}