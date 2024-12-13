<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{

    public function __construct(private LoggerInterface $logger)
    {

    }
    public function findAll()
    {
        $this->logger->info('starship information retrieved');
        return [
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
    }
}