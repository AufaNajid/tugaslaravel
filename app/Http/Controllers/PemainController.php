<?php

namespace App\Http\Controllers;
use App\Models\Pemain;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(){
        return view('/Pemain/pemain', [
            'title' => 'pemain',
            'pemain' => pemain::all(), 
        ]);
    }
    public function show($id)
    {

        return view('/Pemain/detailpemain', [
            'tittle' => 'pemain',
            'pemain' => pemain::findOrFail($id),
        ]);
}

}