<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mentions_legales')]
class MentionsLegalesController extends AbstractController
{
    #[Route('/cgu', name: 'conditions_generales')]
    public function cgu()
    {
        return $this->render('mentionLegales/cgu.html.twig');
    }

    #[Route('/confidentialite', name: 'politiques_confidentialite')]
    public function politiquesConfidentialite()
    {
        return $this->render('mentionLegales/confidentialite.html.twig');
    }

    #[Route('/cookies', name: 'politique_cookies')]
    public function cookies()
    {
        return $this->render('mentionLegales/cookies.html.twig');
    }
}