<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Repository\UtilisateurRepository;
use App\Security\UserFormAuthenticator;
use App\Service\JWTService;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class RegistrationController extends AbstractController
 {
      private MailService $mail;
      private JWTService $jwt;
      private EntityManagerInterface $entityManager;
      private UserAuthenticatorInterface $userAuthenticator;
      private UserFormAuthenticator $authenticator;
      public function __construct(
          MailService $mail,
          JWTService $jwt,
          EntityManagerInterface $em,
          UserAuthenticatorInterface $userAuthenticator,
          UserFormAuthenticator $authenticator
      ) {
          $this->mail = $mail;
          $this->jwt = $jwt;
          $this->entityManager = $em;
          $this->userAuthenticator = $userAuthenticator;
          $this->authenticator = $authenticator;
      }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserFormAuthenticator $authenticator, EntityManagerInterface $entityManager, MailService $mail, JWTService $jwt): Response
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $header = [
                'typ' => 'JWT',
                'alg' => 'HS256'
            ];

            $payload = [
                'utilisateur_id' => $user->getId()
            ];

            $token = $this->jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

            $entityManager->$mail->send(
                'no-reply@monsite.net',
                $user->getEmail(),
                'Activation de votre compte sur le site The District',
                'register',
                compact('user', 'token')
            );

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[IsGranted("ROLE_USER")]
    #[Route('/verif/{token}', name: 'verify_user')]
    public function verifyUser($token): Response
    {
        if ($this->jwt->isValid($token) && !$this->jwt->isExpired($token) && $this->jwt->check($token, $this->getParameter('app.jwtsecret'))) {
            $payload = $this->jwt->getPayload($token);
            $user = $this->entityManager->getRepository(Utilisateur::class)->find($payload['utilisateur_id']);

            if ($user && !$user->getIsVerified()) {
                $user->setIsVerified(true);
                $this->entityManager->flush();
                $this->addFlash('success', 'Utilisateur activé');
                return $this->redirectToRoute('profile_index');
            }
        }

        $this->addFlash('danger', 'Le token est invalide ou a expiré');
        return $this->redirectToRoute('app_login');
    }
}
// namespace App\Controller;

// use App\Entity\Utilisateur;
// use App\Form\RegistrationFormType;
// use App\Security\UserFormAuthenticator;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Bundle\SecurityBundle\Security;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
// use Symfony\Component\Routing\Attribute\Route;

// class RegistrationController extends AbstractController
// {
//     // #[Route('/login', name: 'app_login')]

//     public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
//     {
//         $user = new Utilisateur();
//         $form = $this->createForm(RegistrationFormType::class, $user);
//         $form->handleRequest($request);

//         if ($form->isSubmitted() && $form->isValid()) {

//             $user->setPassword(
//                 $userPasswordHasher->hashPassword(
//                     $user,
//                     $form->get('plainPassword')->getData()
//                 )
//             );

//             $entityManager->persist($user);
//             $entityManager->flush();


//         return $this->redirectToRoute('app_login');
            
//         }

        
        
        
//         return $this->render('registration/register.html.twig', [
//             'registrationForm' => $form,
//         ]);
       
//     }
// }

// namespace App\Controller;


// use App\Entity\Utilisateur;
// use App\Form\RegistrationFormType;
// use App\Security\UserFormAuthenticator;
// use App\Security\EmailVerifier;
// use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Bridge\Twig\Mime\TemplatedEmail;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Bundle\SecurityBundle\Security;
// use Symfony\Component\Mailer\Mailer;
// use Symfony\Component\Mime\Address;
// use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
// use Symfony\Component\Routing\Attribute\Route;
// use Symfony\Contracts\Translation\TranslatorInterface;
// use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

// class RegistrationController extends AbstractController
//{
    // public function __construct(private Mailer $emailVerifier)
    // {
    // }

    //#[Route('/register', name: 'app_register')]
    // public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    // {
    //     $user = new Utilisateur();
    //     $form = $this->createForm(RegistrationFormType::class, $user);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // encode the plain password
    //         $user->setPassword(
    //             $userPasswordHasher->hashPassword(
    //                 $user,
    //                 $form->get('plainPassword')->getData()
    //             )
    //         );

    //         $entityManager->persist($user);
    //         $entityManager->flush();

            // generate a signed url and email it to the user
            // $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
            //     (new TemplatedEmail())
            //         ->from(new Address('mailer@thedistrict.com', 'Acme Mail Bot'))
            //         ->to($user->getEmail())
            //         ->subject('Please Confirm your Email')
            //         ->htmlTemplate('registration/confirmation_email.html.twig')
            // );

           // do anything else you need here, like send an email

//             return $security->login($user, UserAuthenticator::class, 'app_login');
//         }

//         return $this->render('registration/register.html.twig', [
//             'registrationForm' => $form,
//         ]);
//     }
// }
//     #[Route('/verify/email', name: 'app_verify_email')]
//     public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
//     {
//         $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

//         // validate email confirmation link, sets User::isVerified=true and persists
//         try {
//             $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
//         } catch (VerifyEmailExceptionInterface $exception) {
//             $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

//             return $this->redirectToRoute('target_path');
//         }

//          // @TODO Change the redirect on success and handle or remove the flash message in your templates
//         $this->addFlash('success', 'Your email address has been verified.');

//         return $this->redirectToRoute('app_accueil');
//     }

// } 

    //#[Route('/register', name: 'app_register')]
    // public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    // {
    //     $utilisateur = new Utilisateur();
    //     $form = $this->createForm(RegistrationFormType::class, $utilisateur);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         // encode the plain password
    //         $utilisateur->setPassword(
    //             $userPasswordHasher->hashPassword(
    //                 $utilisateur,
    //                 $form->get('plainPassword')->getData()
    //             )
    //         );

    //         $entityManager->persist($utilisateur);
    //         $entityManager->flush();

    //         // generate a signed url and email it to the user
    //         $this->emailVerifier->sendEmailConfirmation('app_verify_email', $utilisateur,
    //             (new TemplatedEmail())
    //                 ->from(new Address('mail@thedistrict.com', 'the_district Mail Bot'))
    //                 ->to($utilisateur->getEmail())
    //                 ->subject('Please Confirm your Email')
    //                 ->htmlTemplate('registration/confirmation_email.html.twig')
    //         );

    //         // do anything else you need here, like send an email

    //         return $this->redirectToRoute('_profiler');
    //     }

    //     return $this->render('registration/register.html.twig', [
    //         'registrationForm' => $form,
    //     ]);
    // }

    // #[Route('/verify/email', name: 'app_verify_email')]
    // public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    // {
    //     $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    //     // validate email confirmation link, sets User::isVerified=true and persists
    //     try {
    //         $this->emailVerifier->handleEmailConfirmation($request, $this->getUtilisateur());
    //     } catch (VerifyEmailExceptionInterface $exception) {
    //         $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

    //         return $this->redirectToRoute('target_path');
    //     }

    //      // @TODO Change the redirect on success and handle or remove the flash message in your templates
    //     $this->addFlash('success', 'Your email address has been verified.');

    //     return $this->redirectToRoute('app_accueil');
    // }



    // #[Route('/verify/email', name: 'app_verify_email')]
    // public function verifyUtilisEmail(Request $request, TranslatorInterface $translator, UtilisateurRepository $utilisateurRepository): Response
    // {
    //     $id = $request->query->get('id');

    //     if (null === $id) {
    //         return $this->redirectToRoute('app_register');
    //     }

    //     $utilisateur = $utilisateurRepository->find($id);

    //     if (null === $utilisateur) {
    //         return $this->redirectToRoute('app_register');
    //     }

    //     // validate email confirmation link, sets User::isVerified=true and persists
    //     try {
    //         $this->emailVerifier->handleEmailConfirmation($request, $user);
    //     } catch (VerifyEmailExceptionInterface $exception) {
    //         $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

    //         return $this->redirectToRoute('app_register');
    //     }

    //     // @TODO Change the redirect on success and handle or remove the flash message in your templates
    //     $this->addFlash('success', 'Your email address has been verified.');

    //     return $this->redirectToRoute('app_register');
    // }
