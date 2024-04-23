// <!--<?php

//namespace App\Controller;

// use Psr\Log\LoggerInterface;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class LogExampleController extends AbstractController
// {
//     private $logger;

//     public function __construct(LoggerInterface $logger)
//     {
//         // Utilisez le service personnalisé si vous l'avez défini
//         $this->logger = $logger;
//     }

//     public function index(): Response
//     {
//         $this->logger->info('Page d\'accueil visitée.');

//         // Votre logique de contrôleur ici

//         return $this->render('default/index.html.twig');
//     }
//} 