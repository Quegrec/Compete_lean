<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FakeEventService;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class EventController extends AbstractController
{
    private $fakeEventService;

    public function __construct(FakeEventService $fakeEventService)
    {
        $this->fakeEventService = $fakeEventService;
    }

    #[Route('/evenements', name: 'event_index')]
    public function index(Request $request)
    {
        $events = $this->fakeEventService->getEvents();

        // Retrieve query parameters
        $location = $request->query->get('location');
        $date = $request->query->get('date');
        $type = $request->query->get('type');
        $price = $request->query->get('price');
        $page = max(1, (int)$request->query->get('page', 1));
        $limit = 9;

        // Filter events
        $filteredEvents = array_filter($events, function ($event) use ($location, $date, $type, $price) {
            return (!$location || stripos($event['location'], $location) !== false)
                && (!$date || $event['date'] === $date)
                && (!$type || $event['type'] === $type)
                && (!$price || $event['price'] <= (int)$price);
        });

        // Paginate filtered events
        $totalEvents = count($filteredEvents);
        $totalPages = ceil($totalEvents / $limit);
        $offset = ($page - 1) * $limit;
        $paginatedEvents = array_slice($filteredEvents, $offset, $limit);

        // Extract unique event types
        $uniqueTypes = array_unique(array_column($filteredEvents, 'type'));

        return $this->render('event/index.html.twig', [
            'events' => $paginatedEvents,
            'uniqueTypes' => $uniqueTypes,
            'currentPage' => $page,
            'totalPages' => $totalPages,
        ]);

    }

    #[Route('/evenements/{slug}', name: 'event_detail')]
    public function details($slug)
    {
        $event = $this->fakeEventService->getEventBySlug($slug);

        if (!$event) {
            throw $this->createNotFoundException('The event does not exist');
        }

        $similarEvents = $this->fakeEventService->getSimilarEvents($event);

        return $this->render('event/show.html.twig', [
            'event' => $event,
            'similarEvents' => $similarEvents,
        ]);
    }

    // étapes dans la billetterie (optionnelle si pas le temps de la faire)
    #[Route('/evenements/{slug}/billeterie', name: 'event_billeterie')]
    public function purchase($slug)
    {
        $event = $this->fakeEventService->getEventBySlug($slug);

        if (!$event) {
            throw $this->createNotFoundException('The event does not exist');
        }

        return $this->render('event/billeterie.html.twig', [
            'event' => $event
        ]);
    }

    // Page de confirmation de l'achat (optionnelle si pas le temps de la faire)
    #[Route('/evenements/{slug}/confirmation', name: 'event_confirmation')]
    public function confirmation($slug, Request $request)
    {
        $event = $this->fakeEventService->getEventBySlug($slug);
        $quantity = $request->request->get('quantity');

        if (!$event) {
            throw $this->createNotFoundException('The event does not exist');
        }

        // Handle payment logic here
        // For now, just render a confirmation page

        return $this->render('event/confirmation.html.twig', [
            'event' => $event,
            'quantity' => $quantity
        ]);
    }



    // Dashboard de l'association avec les événements qu'elle a créé (en cours, passés, à venir)
    #[Route('/mes-evenements', name: 'mes_evenements')]
    #[IsGranted('ROLE_ASSO')]
    public function mesEvenements()
    {
        return $this->render('event/dashboard.html.twig');
    }

    // Création d'un événement par l'association (avec validation par CultuRally, optionnel si pas le temps de la faire)
    #[Route('/creer', name: 'creer')]
    #[IsGranted('ROLE_ASSO')]
    public function creer()
    {
        return $this->render('event/create.html.twig');
    }

    // Détails de l'événement créé par l'association (avec possibilité de modifier, supprimer, voir les participants, ect...)
    #[Route('/mes-evenements/{slug}', name: 'mes_details')]
    #[IsGranted('ROLE_ASSO')]
    public function mesDetails($slug)
    {
        return $this->render('event/mes_details.html.twig', [
            'slug' => $slug,
        ]);
    }
}