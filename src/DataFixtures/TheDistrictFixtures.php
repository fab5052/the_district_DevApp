<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Entity\Detail;
use App\Entity\Commande;

use App\Entity\Utilisateur;
use App\Entity\User;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TheDistrictFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $categorie1 = new Categorie();

        // $categorie1->setLibelle('Pizza');
        // $categorie1->setImage('image/category/pizza_cat.png');
        // $categorie1->setActive('yes');

        include 'truc.php';

        $categorieRepo = $manager->getRepository(Categorie::class);

        foreach ($categorie as $cat) {
            $categorieDB = new Categorie();
            $categorieDB
            ->setLibelle($cat['libelle'])
            ->setImage($cat['image'])
            ->setActive($cat['active']);

            $manager->persist($categorieDB);

       
   
        }
        $manager->flush();

        $platRepo = $manager->getRepository(Plat::class);

        foreach ($plat as $p) {
            $platDB = new Plat();
            $platDB
            ->setLibelle($p['libelle'])
            ->setDescription($p['description'])
            ->setPrix($p['prix'])
            ->setImage($p['image'])
            ->setActive($p['active']);
            $categorie = $categorieRepo->find($p['id_categorie']);
            $platDB->setCategorie($categorie);
            $detail = $detailRepo->find($p['id_detail']);
            $platDB->addDetail($details);
            $manager->persist($platDB);            
        }
        $manager->flush();

        
        $detailRepo = $manager->getRepository(Detail::class);
           
        foreach ($detail as $d) {
            $detailDB = new Detail();
            $detailDB
            ->setQuantite($d['quantite']);
            $commande = $commandeRepo->find($d['id_commande']);
            $detailDB->setCommande($commande);
            $plat = $platRepo->find($d['id_plat']);
            $detailDB->setPlat($plat);
           
            $manager->persist($detailDB);


        }
        // $manager->flush();

    //     $commandeRepo = $manager->getRepository(Commande::class);

    //     foreach ($commande as $com) {
    //         $commandeDB = new Commande();
    //         $commandeDB
    //         ->setDateCommande($com['date_commande'])
    //         ->setTotal($com['total'])
    //         ->setEtat($com['etat']);
    //         $detail = $detailRepo->find($com['id_detail']);
    //         $commandeDB->addDetail($detail);
    //         $utilisateur = $utilisateurRepo->find(['id_utilisateur']);
    //         $commandeDB->setUtilisateur($utilisateur);


        $manager->flush();
        }
    }


