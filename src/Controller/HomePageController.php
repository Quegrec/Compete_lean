<?php


namespace App\Controller;

use App\Entity\NewsletterSubscriber;
use App\Form\SubscriptionFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomePageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $newsletterSubscription = new NewsletterSubscriber();
        $form = $this->createForm(SubscriptionFormType::class, $newsletterSubscription);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($newsletterSubscription);
            $entityManager->flush();

            $this->addFlash('success', 'Vous avez bien été inscrit à la newsletter!');

            $newsletterSubscription = new NewsletterSubscriber();
            $form = $this->createForm(SubscriptionFormType::class, $newsletterSubscription);
        }

        return $this->render('homepage.html.twig', [
            'form' => $form->createView(),
        ]);
    
    }
}