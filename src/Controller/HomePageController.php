<?php


namespace App\Controller;

use App\Entity\NewsletterSubscriber;
use App\Form\SubscriptionFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomePageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Check if the cookie exists
        $cookie = $request->cookies->get('subscribeDialogClosed');

        // Create the form for the newsletter subscription
        $newsletterSubscription = new NewsletterSubscriber();
        $form = $this->createForm(SubscriptionFormType::class, $newsletterSubscription);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Save the subscription to the database
            $entityManager->persist($newsletterSubscription);
            $entityManager->flush();

            $cookie = new Cookie('subscribeDialogClosed', 'true', strtotime('+30 days'));

            // Optionally, add a flash message
            $this->addFlash('success', 'Vous avez bien été inscrit à la newsletter!');
        }

        return $this->render('homepage.html.twig', [
            'showSubscribeDialog' => !$cookie,
            'form' => $form->createView(),
        ]);
    
    }
}