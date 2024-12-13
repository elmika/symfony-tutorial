<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'starships')]
    public function getCollection()  : Response
    {
        $starships = [
            new Starship(
                1,
                'Starship 1',
                'Garden',
                'Jean-Luc Pickles',
                'Taken over by Q'
            ),
            new Starship(
                2,
                'USS Espresso',
                'Latte',
                'Liz the Lizard',
                'repaired'
            ),
            new Starship(
                3,
                'USS Espresso',
                'Delta Tourist',
                'Hitza',
                'Under construction'
            )
        ];

        return $this->json($starships);
    }
}