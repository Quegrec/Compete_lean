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
    #[Route('/home', name: 'homepage')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $newsletterSubscription = new NewsletterSubscriber();
        $form = $this->createForm(SubscriptionFormType::class, $newsletterSubscription);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Save the subscription to the database
            $entityManager->persist($newsletterSubscription);
            $entityManager->flush();
        }

        return $this->render('homepage.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}