<?php

namespace App\Service;

class FakeEventService
{
    public function getEvents()
    {
        return [
            [
                'id' => 1,
                'name' => 'Festival de Pop',
                'date' => '2024-07-01',
                'location' => 'Châteauneuf-du-Pape',
                'price' => 20,
                'type' => 'Musique',
                'organizer' => 'Association Pop Culture',
                'description' => 'Un festival célébrant la musique pop avec des artistes locaux et internationaux.',
                'slug' => 'festival-de-pop-chateauneuf-du-pape-2024-07-01'
            ],
            [
                'id' => 2,
                'name' => 'Promenade de Santé',
                'date' => '2024-07-03',
                'location' => 'Les Baux-de-Provence',
                'price' => 10,
                'type' => 'Randonnée',
                'organizer' => 'Club Nature Provence',
                'description' => 'Une randonnée guidée à travers les paysages magnifiques de Provence.',
                'slug' => 'promenade-de-sante-les-baux-de-provence-2024-07-03'
            ],
            [
                'id' => 3,
                'name' => 'Festival du Vin',
                'date' => '2024-07-05',
                'location' => 'Saint-Émilion',
                'price' => 30,
                'type' => 'Gastronomie',
                'organizer' => 'Vignerons de Saint-Émilion',
                'description' => 'Dégustation de vins fins et découverte des vignobles locaux.',
                'slug' => 'festival-du-vin-saint-emilion-2024-07-05'
            ],
            [
                'id' => 4,
                'name' => 'Fête de la Lavande',
                'date' => '2024-07-07',
                'location' => 'Sault',
                'price' => 15,
                'type' => 'Culture',
                'organizer' => 'Comité des Fêtes de Sault',
                'description' => 'Célébration annuelle de la lavande avec des ateliers et des démonstrations.',
                'slug' => 'fete-de-la-lavande-sault-2024-07-07'
            ],
            [
                'id' => 5,
                'name' => 'Marché Artisanal',
                'date' => '2024-07-10',
                'location' => 'Gordes',
                'price' => 0,
                'type' => 'Artisanat',
                'organizer' => 'Artisans de Gordes',
                'description' => 'Un marché où les artisans locaux vendent leurs créations uniques.',
                'slug' => 'marche-artisanal-gordes-2024-07-10'
            ],
            [
                'id' => 6,
                'name' => 'Nuit des Étoiles',
                'date' => '2024-07-12',
                'location' => 'Collonges-la-Rouge',
                'price' => 5,
                'type' => 'Science',
                'organizer' => 'Association Astronomie Collonges',
                'description' => 'Observation des étoiles avec des astronomes amateurs et professionnels.',
                'slug' => 'nuit-des-etoiles-collonges-la-rouge-2024-07-12'
            ],
            [
                'id' => 7,
                'name' => 'Journée Médiévale',
                'date' => '2024-07-14',
                'location' => 'Cordes-sur-Ciel',
                'price' => 25,
                'type' => 'Historique',
                'organizer' => 'Historiens de Cordes',
                'description' => 'Reconstitution historique et activités médiévales pour toute la famille.',
                'slug' => 'journee-medievale-cordes-sur-ciel-2024-07-14'
            ],
            [
                'id' => 8,
                'name' => 'Festival de Jazz',
                'date' => '2024-07-16',
                'location' => 'Saint-Paul-de-Vence',
                'price' => 40,
                'type' => 'Musique',
                'organizer' => 'Jazz en Provence',
                'description' => 'Concerts de jazz avec des musiciens renommés dans un cadre pittoresque.',
                'slug' => 'festival-de-jazz-saint-paul-de-vence-2024-07-16'
            ],
            [
                'id' => 9,
                'name' => 'Salon du Livre',
                'date' => '2024-07-20',
                'location' => 'Le Mont-Saint-Michel',
                'price' => 10,
                'type' => 'Littérature',
                'organizer' => 'Amis du Livre',
                'description' => 'Rencontres avec des auteurs et séances de dédicaces dans un lieu historique.',
                'slug' => 'salon-du-livre-le-mont-saint-michel-2024-07-20'
            ],
            [
                'id' => 10,
                'name' => 'Fête du Fromage',
                'date' => '2024-07-25',
                'location' => 'Rocamadour',
                'price' => 12,
                'type' => 'Gastronomie',
                'organizer' => 'Confrérie du Fromage',
                'description' => 'Dégustation de fromages locaux et ateliers de fabrication.',
                'slug' => 'fete-du-fromage-rocamadour-2024-07-25'
            ],
            [
                'id' => 11,
                'name' => 'Cinéma en Plein Air',
                'date' => '2024-07-02',
                'location' => 'Eguisheim',
                'price' => 8,
                'type' => 'Cinéma',
                'organizer' => 'Cinéma en Plein Air Alsace',
                'description' => 'Projection de films classiques et modernes en plein air dans le charmant village d\'Eguisheim.',
                'slug' => 'cinema-en-plein-air-eguisheim-2024-07-02'
            ],
            [
                'id' => 12,
                'name' => 'Bal des Pompiers',
                'date' => '2024-07-04',
                'location' => 'Yvoire',
                'price' => 5,
                'type' => 'Danse',
                'organizer' => 'Sapeurs-Pompiers de Yvoire',
                'description' => 'Soirée dansante organisée par les sapeurs-pompiers de Yvoire avec musique et animations.',
                'slug' => 'bal-des-pompiers-yvoire-2024-07-04'
            ],
            [
                'id' => 13,
                'name' => 'Fête du Pain',
                'date' => '2024-07-06',
                'location' => 'Turenne',
                'price' => 6,
                'type' => 'Tradition',
                'organizer' => 'Boulangers de Turenne',
                'description' => 'Célébration des traditions boulangères avec des démonstrations de fabrication de pain.',
                'slug' => 'fete-du-pain-turenne-2024-07-06'
            ],
            [
                'id' => 14,
                'name' => 'Festival de la Photographie',
                'date' => '2024-07-08',
                'location' => 'Giverny',
                'price' => 18,
                'type' => 'Art',
                'organizer' => 'Photographes de Giverny',
                'description' => 'Expositions de photographies artistiques et ateliers de photographie.',
                'slug' => 'festival-de-la-photographie-giverny-2024-07-08'
            ],
            [
                'id' => 15,
                'name' => 'Fête de la Truffe',
                'date' => '2024-07-11',
                'location' => 'Lalbenque',
                'price' => 35,
                'type' => 'Gastronomie',
                'organizer' => 'Trufficulteurs de Lalbenque',
                'description' => 'Dégustation de truffes et produits dérivés avec des démonstrations de cavage.',
                'slug' => 'fete-de-la-truffe-lalbenque-2024-07-11'
            ],
            [
                'id' => 16,
                'name' => 'Festival des Lanternes',
                'date' => '2024-07-13',
                'location' => 'Gaillac',
                'price' => 22,
                'type' => 'Culture',
                'organizer' => 'Amis de Gaillac',
                'description' => 'Magnifique exposition de lanternes illuminées racontant des histoires et légendes locales.',
                'slug' => 'festival-des-lanternes-gaillac-2024-07-13'
            ],
            [
                'id' => 17,
                'name' => 'Fête du Chocolat',
                'date' => '2024-07-15',
                'location' => 'Bourg-en-Bresse',
                'price' => 14,
                'type' => 'Gastronomie',
                'organizer' => 'Chocolatiers de Bourg-en-Bresse',
                'description' => 'Célébration du chocolat avec des dégustations, ateliers de pâtisserie et démonstrations.',
                'slug' => 'fete-du-chocolat-bourg-en-bresse-2024-07-15'
            ],
            [
                'id' => 18,
                'name' => 'Festival des Arts de la Rue',
                'date' => '2024-07-18',
                'location' => 'Uzerche',
                'price' => 12,
                'type' => 'Art',
                'organizer' => 'Compagnie des Arts Urbains',
                'description' => 'Performances d\'art de rue, incluant théâtre, danse et musique en plein air.',
                'slug' => 'festival-des-arts-de-la-rue-uzerche-2024-07-18'
            ],
            [
                'id' => 19,
                'name' => 'Nuit Blanche',
                'date' => '2024-07-22',
                'location' => 'Pérouges',
                'price' => 20,
                'type' => 'Art',
                'organizer' => 'Nuit Blanche Pérouges',
                'description' => 'Une nuit entière dédiée à l\'art contemporain avec des installations et performances.',
                'slug' => 'nuit-blanche-perouges-2024-07-22'
            ],
            [
                'id' => 20,
                'name' => 'Fête de la Pomme',
                'date' => '2024-07-28',
                'location' => 'Beuvron-en-Auge',
                'price' => 8,
                'type' => 'Tradition',
                'organizer' => 'Producteurs de Pommes de Beuvron',
                'description' => 'Célébration de la pomme avec des dégustations, démonstrations et produits locaux.',
                'slug' => 'fete-de-la-pomme-beuvron-en-auge-2024-07-28'
            ],
            [
                'id' => 21,
                'name' => 'Festival du Théâtre',
                'date' => '2024-07-02',
                'location' => 'Monpazier',
                'price' => 18,
                'type' => 'Théâtre',
                'organizer' => 'Compagnie Théâtre du Sud',
                'description' => 'Un festival dédié aux arts du théâtre avec des pièces jouées en plein air.',
                'slug' => 'festival-du-theatre-monpazier-2024-07-02'
            ],
            [
                'id' => 22,
                'name' => 'Fête de la Pêche',
                'date' => '2024-07-05',
                'location' => 'La Flotte',
                'price' => 7,
                'type' => 'Nature',
                'organizer' => 'Association des Pêcheurs de La Flotte',
                'description' => 'Concours de pêche et dégustation de fruits de mer frais.',
                'slug' => 'fete-de-la-peche-la-flotte-2024-07-05'
            ],
            [
                'id' => 23,
                'name' => 'Festival des Arts Numériques',
                'date' => '2024-07-08',
                'location' => 'Baume-les-Messieurs',
                'price' => 25,
                'type' => 'Technologie',
                'organizer' => 'Artistes Numériques de Baume',
                'description' => 'Exploration des arts numériques avec des expositions interactives et des ateliers.',
                'slug' => 'festival-des-arts-numeriques-baume-les-messieurs-2024-07-08'
            ],
            [
                'id' => 24,
                'name' => 'Fête des Vieux Métiers',
                'date' => '2024-07-10',
                'location' => 'Riquewihr',
                'price' => 5,
                'type' => 'Culture',
                'organizer' => 'Traditions Alsaciennes',
                'description' => 'Démonstrations de métiers anciens et ateliers interactifs pour les enfants.',
                'slug' => 'fete-des-vieux-metiers-riquewihr-2024-07-10'
            ],
            [
                'id' => 25,
                'name' => 'Festival de la Montgolfière',
                'date' => '2024-07-12',
                'location' => 'Annonay',
                'price' => 30,
                'type' => 'Sport',
                'organizer' => 'Aérostiers d\'Annonay',
                'description' => 'Spectacle de montgolfières avec des vols captifs et libres, et des animations au sol.',
                'slug' => 'festival-de-la-montgolfiere-annonay-2024-07-12'
            ],
            [
                'id' => 26,
                'name' => 'Salon de la Bande Dessinée',
                'date' => '2024-07-14',
                'location' => 'Saint-Cirq-Lapopie',
                'price' => 10,
                'type' => 'Littérature',
                'organizer' => 'Amateurs de BD',
                'description' => 'Rencontres avec des auteurs de bandes dessinées, dédicaces et ateliers de dessin.',
                'slug' => 'salon-de-la-bande-dessinee-saint-cirq-lapopie-2024-07-14'
            ],
            [
                'id' => 27,
                'name' => 'Fête de la Châtaigne',
                'date' => '2024-07-16',
                'location' => 'Murat',
                'price' => 12,
                'type' => 'Gastronomie',
                'organizer' => 'Producteurs de Châtaignes',
                'description' => 'Marché de producteurs de châtaignes et produits dérivés, avec des dégustations et ateliers.',
                'slug' => 'fete-de-la-chataigne-murat-2024-07-16'
            ],
            [
                'id' => 28,
                'name' => 'Festival de la Sculpture',
                'date' => '2024-07-18',
                'location' => 'Parthenay',
                'price' => 20,
                'type' => 'Art',
                'organizer' => 'Sculpteurs de Parthenay',
                'description' => 'Expositions de sculptures en plein air et ateliers pour découvrir cet art.',
                'slug' => 'festival-de-la-sculpture-parthenay-2024-07-18'
            ],
            [
                'id' => 29,
                'name' => 'Festival des Saveurs',
                'date' => '2024-07-21',
                'location' => 'Cassis',
                'price' => 15,
                'type' => 'Gastronomie',
                'organizer' => 'Gourmets de Cassis',
                'description' => 'Découverte des spécialités culinaires locales avec dégustations et démonstrations.',
                'slug' => 'festival-des-saveurs-cassis-2024-07-21'
            ],
            [
                'id' => 30,
                'name' => 'Journées du Patrimoine',
                'date' => '2024-07-24',
                'location' => 'Salers',
                'price' => 0,
                'type' => 'Historique',
                'organizer' => 'Historiennes de Salers',
                'description' => 'Visites guidées des monuments historiques de Salers avec des experts locaux.',
                'slug' => 'journees-du-patrimoine-salers-2024-07-24'
            ],
            [
                'id' => 31,
                'name' => 'Fête de la Musique Classique',
                'date' => '2024-07-26',
                'location' => 'Villefranche-de-Conflent',
                'price' => 20,
                'type' => 'Musique',
                'organizer' => 'Orchestre Symphonique de Villefranche',
                'description' => 'Concerts de musique classique avec des solistes et orchestres de renom.',
                'slug' => 'fete-de-la-musique-classique-villefranche-de-conflent-2024-07-26'
            ],
            [
                'id' => 32,
                'name' => 'Fête de la Poterie',
                'date' => '2024-07-28',
                'location' => 'Sainte-Enimie',
                'price' => 8,
                'type' => 'Artisanat',
                'organizer' => 'Potiers de Sainte-Enimie',
                'description' => 'Expositions et démonstrations de poterie avec des ateliers pour tous les âges.',
                'slug' => 'fete-de-la-poterie-sainte-enimie-2024-07-28'
            ],
            [
                'id' => 33,
                'name' => 'Festival des Fleurs',
                'date' => '2024-07-01',
                'location' => 'Collioure',
                'price' => 10,
                'type' => 'Nature',
                'organizer' => 'Horticulteurs de Collioure',
                'description' => 'Une célébration des fleurs avec des expositions florales, des ateliers de jardinage, et des concours.',
                'slug' => 'festival-des-fleurs-collioure-2024-07-01'
            ],
            [
                'id' => 34,
                'name' => 'Fête du Cinéma',
                'date' => '2024-07-03',
                'location' => 'Flavigny-sur-Ozerain',
                'price' => 15,
                'type' => 'Cinéma',
                'organizer' => 'Cinéma Classique Bourgogne',
                'description' => 'Projections de films classiques et contemporains en plein air.',
                'slug' => 'fete-du-cinema-flavigny-sur-ozerain-2024-07-03'
            ],
            [
                'id' => 35,
                'name' => 'Festival de la Danse',
                'date' => '2024-07-05',
                'location' => 'Brantôme',
                'price' => 18,
                'type' => 'Danse',
                'organizer' => 'Danseurs de Brantôme',
                'description' => 'Spectacles de danse variés avec des compagnies locales et internationales.',
                'slug' => 'festival-de-la-danse-brantome-2024-07-05'
            ],
            [
                'id' => 36,
                'name' => 'Fête des Vins',
                'date' => '2024-07-07',
                'location' => 'Sancerre',
                'price' => 25,
                'type' => 'Gastronomie',
                'organizer' => 'Vignerons de Sancerre',
                'description' => 'Dégustation de vins locaux avec des sommeliers experts et des ateliers œnologiques.',
                'slug' => 'fete-des-vins-sancerre-2024-07-07'
            ],
            [
                'id' => 37,
                'name' => 'Festival de la Bande Dessinée',
                'date' => '2024-07-10',
                'location' => 'Luz-Saint-Sauveur',
                'price' => 12,
                'type' => 'Littérature',
                'organizer' => 'Association des Bédéphiles',
                'description' => 'Rencontres avec des auteurs de bandes dessinées, séances de dédicaces et ateliers de dessin.',
                'slug' => 'festival-de-la-bande-dessinee-luz-saint-sauveur-2024-07-10'
            ],
            [
                'id' => 38,
                'name' => 'Fête de la Guitare',
                'date' => '2024-07-12',
                'location' => 'Jougne',
                'price' => 20,
                'type' => 'Musique',
                'organizer' => 'Guitaristes de Jougne',
                'description' => 'Concerts et masterclasses de guitare avec des artistes renommés.',
                'slug' => 'fete-de-la-guitare-jougne-2024-07-12'
            ],
            [
                'id' => 39,
                'name' => 'Festival des Jeux',
                'date' => '2024-07-14',
                'location' => 'Olargues',
                'price' => 8,
                'type' => 'Divertissement',
                'organizer' => 'Ludothécaires d\'Olargues',
                'description' => 'Jeux de société, jeux de rôle et tournois pour tous les âges.',
                'slug' => 'festival-des-jeux-olargues-2024-07-14'
            ],
            [
                'id' => 40,
                'name' => 'Nuit des Contes',
                'date' => '2024-07-16',
                'location' => 'Saint-Antoine-l\'Abbaye',
                'price' => 10,
                'type' => 'Littérature',
                'organizer' => 'Conteurs de Saint-Antoine',
                'description' => 'Soirée de contes pour enfants et adultes avec des conteurs professionnels.',
                'slug' => 'nuit-des-contes-saint-antoine-l-abbaye-2024-07-16'
            ],
            [
                'id' => 41,
                'name' => 'Festival de la Mer',
                'date' => '2024-07-18',
                'location' => 'Cancale',
                'price' => 12,
                'type' => 'Nature',
                'organizer' => 'Amis de la Mer',
                'description' => 'Célébration de la mer avec des expositions, des excursions en bateau et des dégustations de fruits de mer.',
                'slug' => 'festival-de-la-mer-cancale-2024-07-18'
            ],
            [
                'id' => 42,
                'name' => 'Fête du Miel',
                'date' => '2024-07-20',
                'location' => 'Barjac',
                'price' => 7,
                'type' => 'Gastronomie',
                'organizer' => 'Apiculteurs de Barjac',
                'description' => 'Dégustation de miel et produits dérivés avec des ateliers sur l\'apiculture.',
                'slug' => 'fete-du-miel-barjac-2024-07-20'
            ],
            [
                'id' => 43,
                'name' => 'Festival des Arts du Cirque',
                'date' => '2024-07-22',
                'location' => 'Marcolès',
                'price' => 18,
                'type' => 'Divertissement',
                'organizer' => 'Cirque en Fête',
                'description' => 'Spectacles de cirque avec des acrobates, jongleurs et clowns.',
                'slug' => 'festival-des-arts-du-cirque-marcoles-2024-07-22'
            ],
            [
                'id' => 44,
                'name' => 'Fête des Saveurs Provençales',
                'date' => '2024-07-24',
                'location' => 'Forcalquier',
                'price' => 15,
                'type' => 'Gastronomie',
                'organizer' => 'Gourmets de Forcalquier',
                'description' => 'Découverte des saveurs de la Provence avec des dégustations et démonstrations culinaires.',
                'slug' => 'fete-des-saveurs-provencales-forcalquier-2024-07-24'
            ],
            [
                'id' => 45,
                'name' => 'Festival de la Peinture',
                'date' => '2024-07-26',
                'location' => 'Pont-Aven',
                'price' => 20,
                'type' => 'Art',
                'organizer' => 'Artistes de Pont-Aven',
                'description' => 'Expositions de peintures et ateliers d\'art pour tous les âges.',
                'slug' => 'festival-de-la-peinture-pont-aven-2024-07-26'
            ]

            // Faudrait pas hésiter à en rajouter pour avoir plus de contenu
        ];
    }

    public function getEventBySlug($slug)
    {
        foreach ($this->getEvents() as $event) {
            if ($event['slug'] === $slug) {
                return $event;
            }
        }
        return null;
    }

    public function getSimilarEvents($event)
    {
        // même genre
        $similarEvents = array_filter($this->getEvents(), function ($e) use ($event) {
            return $e['type'] === $event['type'] && $e['slug'] !== $event['slug'];
        });

        return $similarEvents;
    }

    // Peut être amélioré pour prendre en compte la localisation ou un radius de recherche
    public function GetNearEvents($event)
    {
        // même localisation
        $nearEvents = array_filter($this->getEvents(), function ($e) use ($event) {
            return $e['location'] === $event['location'] && $e['slug'] !== $event['slug'];
        });

        return $nearEvents;
    }
}
