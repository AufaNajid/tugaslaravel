<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        return view('/Kelas/kelas', [
            'title' => 'kelas',
            'kelas' => kelas::all(), 
        ]);
    }

    public function create()
{
    $create = kelas::all();

    return view('Kelas.create', [
        'title' => 'Create',
        'create' => $create,
    ]);
    
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string',
    ]);

    $result = kelas::create($request->all());
    if ($result) {
        return redirect('/kelas')-> with('succes', 'Data siswa telah ditambahkan'); 
    }

    
}

public function destroy($id)
{
    $kelas = kelas::findOrFail($id);

    if ($kelas->delete()) {
        return redirect('/kelas')->with('success', 'Data pemain telah dihapus');
    } else {
        return redirect('/kelas')->with('error', 'Gagal menghapus data pemain');
    }
}

public function edit($id)
{
    $kelas = kelas::findOrFail($id);

    return view('Kelas.edit', [
        'title' => 'Edit Player',
        'kelas' => $kelas,
    ]);
}

public function update(Request $request, $id)
{

    $request->validate([
        'nama' => 'required',
    ]);
    $kelas = kelas::findOrFail($id);

    $kelas->update($request->all());

    return redirect('/kelas')->with('success', 'Data pemain telah diupdate');
}

}
