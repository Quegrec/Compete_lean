<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CreatePost extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'constraints' => [
                    new Length(['min' => 5, 'max' => 255]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'tinymce',
                    'rows' => 5,
                ],
                'constraints' => [
                    new Length(['min' => 10]),
                ],
            ])
            ->add('picture', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez ajouter une image'
                    ]),
                    new Image([
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                        'image/gif',
                        'image/jpg',
                        ],
                    'mimeTypesMessage' => "Format d'image incorrect",
                    ])
                ],
            ]);
        }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}