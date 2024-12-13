<?php

namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/starships')]
class StarshipApiController extends AbstractController
{
    #[Route('', name: 'starships', methods: ['GET'])]
    public function getCollection(StarshipRepository $repo)  : Response
    {
        return $this->json($repo->findAll());
    }

    #[Route('/{id<\d+>}', name: 'starship', methods: ['GET'])]
    public function get(int $id, StarshipRepository $repo): Response
    {
        $ship = $repo->find($id);

        if(!$ship) {
            throw $this->CreateNotFoundException("Starship not found");
        }
        return $this->json($ship);
    }
}