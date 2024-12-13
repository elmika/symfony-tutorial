<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(StarshipRepository $repo): Response
    {
        $ships = $repo->findAll();
        $randomNumber = count($ships);

        return $this->render('main/homepage.html.twig', [
            'ships' => $ships
        ]);
    }
}
