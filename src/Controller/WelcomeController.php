<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_welcome')]
    public function index(): Response
    {
        return $this->render('welcome.html.twig', [
            'message' => 'Bienvenue sur notre application Symfony !',
        ]);
    }
}
