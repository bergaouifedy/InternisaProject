<?php

namespace App\Form;

use App\Entity\Recruteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecruteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', null, array('label' => false))
            ->add('email', null, array('label' => false))
            ->add('password', null, array('label' => false))
            ->add('passwordVerification', null, array('label' => false))
            ->add('firstname', null, array('label' => false))
            ->add('lastname', null, array('label' => false))
            ->add('numTel', null, array('label' => false))
            ->add('adresse', null, array('label' => false))
            ->add('pays', null, array('label' => false))
            ->add('secteur', null, array('label' => false));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recruteur::class,
        ]);
    }
}
