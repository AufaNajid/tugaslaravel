<?php

namespace App\Http\Controllers;
use App\Models\Musicc;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        return view('/Music/music', [
            'title' => 'music',
            'music' => Musicc::all(),
            
        ]);
    }

    public function show($id)
    {

        return view('/Music/detail', [
            'tittle' => 'music',
            'music' => Musicc::findOrFail($id),
        ]);
    }
}
