<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Plat;
use App\Entity\Detail;
use App\Entity\Commande;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TheDistrictFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        include 'base.php';

        foreach ($utilisateur as $utilisateurData) {
            $utilisateurDB = new Utilisateur();
            $utilisateurDB 
             ->setEmail($utilisateurData['email']) 
             ->setPassword($utilisateurData['password'])
             ->setNom($utilisateurData['nom'])
             ->setPrenom($utilisateurData['prenom'])
             ->setTelephone($utilisateurData['telephone'])
             ->setAdresse($utilisateurData['adresse'])
             ->setCp($utilisateurData['cp'])
             ->setVille($utilisateurData['ville']);
            

        
            $manager->persist($utilisateurDB);
        }
        $manager->flush();


        foreach ($categorie as $catData) {
            $categorieDB = new Categorie();
            $categorieDB
                ->setLibelle($catData['libelle'])
                ->setImage($catData['image'])
                ->setActive($catData['active']);
            
            $manager->persist($categorieDB);
        }
        $manager->flush();

        foreach ($plat as $platData) {
            $platDB = new Plat();
            $platDB
                ->setLibelle($platData['libelle'])
                ->setDescription($platData['description'])
                ->setPrix($platData['prix'])
                ->setImage($platData['image'])
                ->setActive($platData['active']);
            
            $categorie = $manager->getRepository(Categorie::class)->find($platData['id_categorie']);
            if ($categorie) {
                $platDB->setCategorie($categorie);
            }

       
          

            $manager->persist($platDB);
        }
        $manager->flush();

        foreach ($detail as $detailData) {
            $detailDB = new Detail();
            $detailDB
                ->setQuantite($detailData['quantite']);
            
            $plat = $manager->getRepository(Plat::class)->find($detailData['id_plat']);
            if ($plat) {
                $detailDB->setPlat($plat);
            }

            $commande = $manager->getRepository(Commande::class)->find($detailData['id_commande']);
            if ($commande) {
                $detailDB->setCommande($commande);
            }

            //   $detail = $manager->getRepository(Detail::class)->find($detailData['id_detail']);
            // if ($detail) {
            //     $platDB->addDetail($detail);
            // }
            

            $manager->persist($detailDB);
        }
        $manager->flush();

        include 'base.php';

        foreach ($commande as $commandeData) {
            $date = new \DateTime($commandeData['date_commande']);
            $commandeDB = new Commande();
            $commandeDB
                ->setDateCommande($date)
                ->setTotal($commandeData['total'])
                ->setEtat($commandeData['etat']);
            
            $detail = $manager->getRepository(Detail::class)->find($commandeData['id_detail']);
            if ($detail) {
                $commandeDB->addDetail($detail);
            }

            $utilisateur = $manager->getRepository(Utilisateur::class)->find($commandeData['id_utilisateur']);
            if ($utilisateur) {
                $commandeDB->setUtilisateur($utilisateur);
            }

            $manager->persist($commandeDB);
        }
        $manager->flush();

        include 'base.php';
    

    
        }


 }

