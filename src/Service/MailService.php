<?php

namespace App\Service;

use DateTimeImmutable;

use App\Entity\Utilisateur;
use App\Entity\Contact;
//use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class MailerInterface
{
    private $mailerInterface;

    public function __construct(MailerInterface $email)
    {
        $this->mailerInterface = $email;
    }

    public function sendEmail(Utilisateur $data): void
    {
          $email = (new TemplatedEmail())
            ->from($data->getEmail())
            ->to('The_District@gmail.com')
            ->subject('Inscription')
            ->htmlTemplate('registration/confirmation_email.html.twig')
            ->context(['data_mail' => $data]);
    
        $this->mailerInterface->send($email);
    }

     public function sendEmailConfirm(Utilisateur $data): void
    {


        $emailConfirm = (new Email())
            ->from('The_District@gmail.com')
            ->to($data->getEmail())
            ->subject('Inscription')
            ->text('Merci pour votre inscription.');

        $this->mailerInterface->sendEmailConfirm($email);
    }

    // public function sendEmail(Contact $data): void
    // {
    //     $email = (new TemplatedEmail())
    //         ->from($data->getEmail())
    //         ->to('The_District@gmail.com')
    //         ->subject('Demande de contact')
    //         ->htmlTemplate('contact/mail.html.twig')
    //         ->context(['data_mail' => $data]);

    //     $this->mailerInterface->sendEmail($email);
    // }

    // public function sendEmailConfirmation(Contact $data): void
    // {


    //     $emailConfirmation = (new Email())
    //         ->from('The_District@gmail.com')
    //         ->to($data->getEmail())
    //         ->subject('Confirmation de votre demande de contact')
    //         ->text('Merci pour votre demande de contact. Nous avons bien reçu vos informations.');

    //     $this->mailerInterface->sendEmail($emailConfirmation);
    // }
}
