<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    // Annuaire de tous les événements par CultuRally en France avec filtrage (Ville, Date, Type, Prix, ect...)
    #[Route('/evenements', name: 'event_index')]
    public function index(Request $request)
    {
        $events = [
            ['id' => 1, 'name' => 'Concert de Jazz', 'date' => '25-07-2025', 'location' => 'Paris', 'price' => 10, 'type' => 'Concert', 'slug' => 'concert-de-jazz'],
            ['id' => 2, 'name' => 'Exposition de peinture', 'date' => '25-07-2025', 'location' => 'Lyon', 'price' => 5, 'type' => 'Exposition', 'slug' => 'exposition-de-peinture'],
            ['id' => 3, 'name' => 'Spectacle de danse', 'date' => '25-07-2025', 'location' => 'Marseille', 'price' => 15, 'type' => 'Spectacle', 'slug' => 'spectacle-de-danse'],
            ['id' => 4, 'name' => 'Cinéma en plein air', 'date' => '25-12-2025', 'location' => 'Bordeaux', 'price' => 5, 'type' => 'Cinéma', 'slug' => 'cinema-en-plein-air'],
            ['id' => 5, 'name' => 'Atelier de cuisine', 'date' => '25-12-2025', 'location' => 'Toulouse', 'price' => 20, 'type' => 'Atelier', 'slug' => 'atelier-de-cuisine'],
            ['id' => 6, 'name' => 'Conférence sur l\'écologie', 'date' => '25-12-2025', 'location' => 'Nantes', 'price' => 5, 'type' => 'Conférence', 'slug' => 'conference-sur-lecologie'],
            ['id' => 7, 'name' => 'Balade en forêt', 'date' => '25-12-2025', 'location' => 'Strasbourg', 'price' => 0, 'type' => 'Balade', 'slug' => 'balade-en-foret'],
            ['id' => 8, 'name' => 'Spectacle de magie', 'date' => '25-12-2025', 'location' => 'Lille', 'price' => 10, 'type' => 'Spectacle', 'slug' => 'spectacle-de-magie'],
            ['id' => 9, 'name' => 'Atelier de dessin', 'date' => '25-12-2025', 'location' => 'Rennes', 'price' => 10, 'type' => 'Atelier', 'slug' => 'atelier-de-dessin'],
            ['id' => 10, 'name' => 'Concert de rock', 'date' => '25-12-2025', 'location' => 'Nice', 'price' => 10, 'type' => 'Concert', 'slug' => 'concert-de-rock'],
        ];

        // Retrieve query parameters
        $location = $request->query->get('location');
        $date = $request->query->get('date');
        $type = $request->query->get('type');
        $price = $request->query->get('price');

        // Filter events
        $filteredEvents = array_filter($events, function ($event) use ($location, $date, $type, $price) {
            return (!$location || stripos($event['location'], $location) !== false)
                && (!$date || $event['date'] === $date)
                && (!$type || $event['type'] === $type)
                && (!$price || $event['price'] <= (int)$price);
        });

        return $this->render('event/index.html.twig', [
            'events' => $filteredEvents,
        ]);
    }

    // Détails d'un événement avec accès à la billetterie et potentiellement cagnotte participative
    #[Route('/evenements/{slug}', name: 'detail')]
    public function details($slug, EventRepository $eventRepository)
    {
        $event = eventRepository->findOneBy([
            'slug' => $slug
        ]);
        
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    // étapes dans la billetterie (optionnelle si pas le temps de la faire)
    #[Route('/evenements/{slug}/{id}', name: 'etape')]
    public function edit($slug)
    {
        return $this->render('event/etapes.html.twig', [
            'slug' => $slug,
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