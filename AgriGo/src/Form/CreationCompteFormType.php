<?php

namespace App\Form;

use App\Entity\Producteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreationCompteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mailProducteur')
            ->add('nomProducteur')
            ->add('prenomProducteur')
            ->add('nomRue')
            ->add('numRue')
            ->add('codePostal')
            ->add('villeProducteur')
            ->add('nomMagasin')
            ->add('numTelProducteur')
            ->add('imageProducteur')
            ->add('Valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Producteur::class,
        ]);
    }
}
