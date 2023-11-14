<?php

namespace App\Http\Controllers;
use App\Models\Game;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('/Game/game', [
            'title' => 'game',
            'game' => Game::all(),
            
        ]);
    }

        public function show($id)
    {
        return view('Game.gamedetail', [
            'tittle' => 'game',
            'game' => Game::find($id),
        ]);
    }
}

