<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]
    public function getSong($id): Response
    {
        $songs = [
            1=>[
            'id' => 1,
            'name' => 'Kangaroo_MusiQue',
            'url' => 'https://commondatastorage.googleapis.com/codeskulptor-demos/DDR_assets/Kangaroo_MusiQue_-_The_Neverwritten_Role_Playing_Game.mp3',
            ],
            2=>[
            'id' => 2,
            'name' => 'Sevish',
            'url' => 'https://commondatastorage.googleapis.com/codeskulptor-demos/DDR_assets/Sevish_-__nbsp_.mp3',
            ],
            3=>[
                'id' => 3,
                'name' => 'Evillaugh',
                'url' => 'https://commondatastorage.googleapis.com/codeskulptor-assets/Evillaugh.ogg',
            ],
            4=>[
                'id' => 4,
                'name' => 'pazamodules',
                'url' => 'https://codeskulptor-demos.commondatastorage.googleapis.com/pang/paza-moduless.mp3',
            ],
            5=>[
                'id' => 5,
                'name' => 'race1',
                'url' => 'https://commondatastorage.googleapis.com/codeskulptor-demos/riceracer_assets/music/race1.ogg',
            ],
            6=>[
                'id' => 6,
                'name' => 'win',
                'url' => 'https://commondatastorage.googleapis.com/codeskulptor-demos/riceracer_assets/music/win.ogg',
            ],
                
            
        ];
        
        return $this->json($songs[$id]);
    }
}