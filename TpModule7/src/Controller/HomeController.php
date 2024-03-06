<?php

namespace App\Controller;

use App\Repository\VehiculeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(VehiculeRepository $vehiculeRepository)
    {
        $vehicules = $vehiculeRepository->findAll();
        return $this->render(
            'home/index.html.twig',
            ['vehicules' => $vehicules]
        );
    }
    #[Route('/mentions', name: 'app_mentions')]
    public function mentions()
    {
        return $this->render('home/mentions.html.twig');
    }
}
