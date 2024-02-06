<?php

namespace App\Http\Controllers;
use App\Models\kelas;
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

public function create()
{
    $kelas = kelas::all();

    return view('Pemain.create', [
        'title' => 'Create',
        'kelas' => $kelas,
    ]);
    
}

public function store(Request $request)
{
    $request->validate([
        'pemain' => 'required',
        'umur' => 'required|numeric',
        'role' => 'required',
        'team_id' => 'required|string',
        'tanggal' => 'required|date',
    ]);

    $result = pemain::create($request->all());
    if ($result) {
        return redirect('/pemain')-> with('succes', 'Data siswa telah ditambahkan'); 
    }
}

public function destroy($id)
{
    $pemain = Pemain::findOrFail($id);

    if ($pemain->delete()) {
        return redirect('/pemain')->with('success', 'Data pemain telah dihapus');
    } else {
        return redirect('/pemain')->with('error', 'Gagal menghapus data pemain');
    }
}

public function edit($id)
{
    $pemain = Pemain::findOrFail($id);
    $kelas = kelas::all();

    return view('Pemain.edit', [
        'title' => 'Edit Player',
        'pemain' => $pemain,
        'kelas' => $kelas
    ]);
}

public function update(Request $request, $id)
{

    $request->validate([
        'pemain' => 'required',
        'umur' => 'required|numeric',
        'role' => 'required',
        'team_id' => 'required|string',
        'tanggal' => 'required|date',
    ]);
    $pemain = Pemain::findOrFail($id);

    $pemain->update($request->all());

    return redirect('/pemain')->with('success', 'Data pemain telah diupdate');
}



   
}


