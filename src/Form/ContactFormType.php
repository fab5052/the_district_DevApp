<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
// use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', 
        TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Nom'
        ])
            ->add('prenom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Prénom'
        ])
            ->add('telephone', 
            TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Téléphone'
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'E-mail',
                'required' => true
            ])
            
            ->add('objet', TextType::class,  [      
               'attr' => [
                    'class' => 'form-control'
               ],
                'label' => 'Objet',
                'required' => false
            ])        
        //     ->add('demande', TextareaType::class, [
        //         'attr' => [
        //            'class' => 'form-control'
        //        ],
        //        'label' => 'Demande',
        //        'required' => false
        //    ])
            //champ otionnel en ajoutant un label
            // donnant la valeur false à l'attribut required
            ->add('messages', TextareaType::class, [
                 'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Votre message',
                'required' => false
            ])
            ->add('save', SubmitType::class, [
                 'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Envoyer message',
            
            ]) 
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
// Symfony propose un large éventail de types de champ préconstruits, qui correspondent aux différents types de données que vous pouvez utiliser dans un formulaire. Voici quelques-uns des types de champ les plus couramment utilisés :

//     TextType : Champ de texte simple.
//     TextareaType : Champ de texte multiligne.
//     EmailType : Champ pour les adresses e-mail.
//     IntegerType : Champ pour les nombres entiers.
//     DateType : Champ pour les dates.
//     ChoiceType : Champ pour les listes déroulantes ou les cases à cocher.
//     FileType : Champ pour les fichiers téléchargés.
//     HiddenType : Champ caché.
//     EntityType : Champ pour sélectionner une entité d'une relation.