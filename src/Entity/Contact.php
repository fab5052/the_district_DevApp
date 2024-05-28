<?php

namespace App\Entity;

// use App\Repository\ContactRepository;
// use Doctrine\DBAL\Types\Types;
// use Doctrine\ORM\Mapping as ORM;
use App\Repository\ContactRepository;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $objet = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;


    #[ORM\Column(length: 255)]
    private ?string $Telephone = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Demande = null;


    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $messages = null;


    public function getId(): ?int
    {
        return $this->id;
    }
   
    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): static
    {
        $this->objet = $objet;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $Email): static
    {
        $this->email = $Email;

        return $this;
    }


    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    
    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): static
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getDemande(): ?string
    {
        return $this->Demande;
    }

    public function setDemande(string $Demande): static
    {
        $this->Demande = $Demande;

        return $this;
    }


    public function getMessages(): ?string
    {
        return $this->messages;
    }

    public function setMessages(?string $messages): static
    {
        $this->messages = $messages;

        return $this;
    }
}
// namespace App\Entity;

// use App\Repository\ContactRepository;
// use Symfony\Component\Mime\Email;
// use Symfony\Bridge\Twig\Mime\TemplatedEmail;
// use Symfony\Component\Mailer\MailerInterface;
// use Doctrine\DBAL\Types\Types;
// use Symfony\Component\Security\Core\User\UserInterface;
// use Doctrine\ORM\Mapping as ORM;

// #[ORM\Entity(repositoryClass: ContactRepository::class)]
// class Contact
// {
//     #[ORM\Id]
//     #[ORM\GeneratedValue]
//     #[ORM\Column]
//     private ?int $id = null;

//     #[ORM\Column(length: 255)]
//     private ?string $objet = null;

//     #[ORM\Column(length: 255)]
//     private ?string $email = null;

//     #[ORM\Column(length: 50)]
//     private ?string $nom = null;

//     #[ORM\Column(length: 50)]
//     private ?string $prenom = null;

//     #[ORM\Column(length: 20)]
//     private ?string $telephone = null;

//     public function getUserIdentifier(): string
//     {
//         return (string) $this->email;
//     }

//     #[ORM\Column(type: Types::TEXT, nullable: true)]
//     private ?string $messages = null;

//     public function getId(): ?int
//     {
//         return $this->id;
//     }

//     public function getObjet(): ?string
//     {
//         return $this->objet;
//     }

//     public function setObjet(string $objet): static
//     {
//         $this->objet = $objet;

//         return $this;
//     }

//     public function getEmail(): ?string
//     {
//         return $this->email;
//     }

//     public function setEmail(string $email): static
//     {
//         $this->email = $email;

//         return $this;
//     }


//     public function getMessages(): ?string
//     {
//         return $this->messages;
//     }

//     public function setMessages(?string $messages): static
//     {
//         $this->messages = $messages;

//         return $this;
//     }
// }
