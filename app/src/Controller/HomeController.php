<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/responsive', name: 'app_responsive')]
    public function responsive(): Response
    {
        return $this->render('home/responsive.html.twig');
    }

    #[Route('/bloc', name: 'app_bloc')]
    public function bloc(): Response
    {
        return $this->render('home/bloc.html.twig');
    }

    #[Route('/js', name: 'app_js')]
    public function js(): Response
    {
        return $this->render('home/js.html.twig');
    }
}
