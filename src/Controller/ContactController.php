<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\DemoFormType;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest(($request));

        if ($form->isSubmitted() && $form->isValid()) {

            //créer instance de Contact
            $messages = new Contact();
            //Traitement 
            $data = $form->getData();
            //stocke les données récupérées dans la var $message
            $messages = $data;

            $entityManager->persist($messages);
            $entityManager->flush();
        
        //redirection vers accueil
        return $this->redirectToRoute('app_accueil');
    
    
    }

        return $this->render('contact/index.html.twig', [
            // 'controller_name' => 'ContactController',
            'form' => $form
        ]);
    }
}
