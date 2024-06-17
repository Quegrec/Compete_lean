<?php

namespace App\Form;

use App\Entity\NewsletterSubscriber;
use App\Repository\NewsletterSubscriberRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class SubscriptionFormType extends AbstractType
{
    private NewsletterSubscriberRepository $repository;
    
    public function __construct(NewsletterSubscriberRepository $repository)
    {
        $this->repository = $repository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => "Entrez votre adresse mail",
                ],
                'constraints' => [
                    new Callback([$this, 'alreadySubscribed'])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NewsletterSubscriber::class,
        ]);
    }

    public function alreadySubscribed($email, ExecutionContextInterface $context): void
    {
        $subscriber = $this->repository->findOneBy(['email' => $email]);

        if ($subscriber) {
            $context->addViolation('Vous êtes déjà abonné(e) à notre newsletter.');
        }
    }

}
