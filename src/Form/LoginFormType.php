<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'label' => 'Nom d\'utilisateur :',
                'attr' => [
                    'class' => 'py-2 border border-black rounded-md',
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe :',
                'attr' => [
                    'class' => 'py-2 border border-black rounded-md',
                ],
                'mapped' => false,
            ]);
    }
}
