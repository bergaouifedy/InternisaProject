<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username',null,array('label'=>false))
            ->add('email',null,array('label'=>false))
            ->add('password',null,array('label'=>false))
            ->add('firstname',null,array('label'=>false))
            ->add('lastname',null,array('label'=>false))
            ->add('numTel',null,array('label'=>false))
            ->add('adresse',null,array('label'=>false))
            ->add('pays',null,array('label'=>false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
