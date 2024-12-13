<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $randomNumber = 36;

        $myStuff = [
            'name' => 'John Doe de la mancha',
            'quantity' => 244,
            'other' => 'comments'
        ];

        return $this->render('main/homepage.html.twig', [
            'random' => $randomNumber,
            'stuff' => $myStuff
        ]);
    }
}
