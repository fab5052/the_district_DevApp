<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use App\Entity\User;
use App\Entity\Plat;
use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Detail;

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

        // foreach ($categorie as $cat) {
        //     $categorieDB = new Categorie();
        //     $categorieDB
        //     ->setLibelle($cat['libelle'])
        //     ->setImage($cat['image'])
        //     ->setActive($cat['active']);

        //     $manager->persist($categorieDB);

        //     //empecher auto-increment//
        //     $metadata = $manager->getClassMetaData(Categorie::class);
        //     $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);    
        // }
        // $manager->flush();
        
        foreach ($plat as $p) {
            $platDB = new Plat();
            $platDB
            ->setLibelle($p['libelle'])
            ->setDescription($p['description'])
            ->setPrix($p['prix'])
            ->setImage($p['image'])
            ->setActive($p['active']);
            // $categorie = $categorieRepo->find($p['categorie_id']);
            // $platDB->setCategorie($categorie);
            // $details = $detailsRepo->find($d['details_id']);
            // $platDB->addDetail($details);
            $manager->persist($platDB);            
        }
        $manager->flush();
    }
}

