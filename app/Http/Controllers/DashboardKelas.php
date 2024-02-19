<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class DashboardKelas extends Controller
{
    
    public function index(){
        return view('/Dashboard/Kelas/kelas', [
            'title' => 'kelas',
            'kelas' => kelas::all(), 
        ]);
    }

    public function create()
{
    $create = kelas::all();

    return view('Dashboard.Kelas.create', [
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
        return redirect('/Dashboard/Kelas/kelas')-> with('succes', 'Data siswa telah ditambahkan'); 
    }

    
}

public function destroy($id)
{
    $kelas = kelas::findOrFail($id);

    if ($kelas->delete()) {
        return redirect('/Dashboard/Kelas/kelas')->with('success', 'Data pemain telah dihapus');
    } else {
        return redirect('/Dashboard/Kelas/kelas')->with('error', 'Gagal menghapus data pemain');
    }
}

public function edit($id)
{
    $kelas = kelas::findOrFail($id);

    return view('/Dashboard/Kelas/edit', [
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

    return redirect('/Dashboard/Kelas/kelas')->with('success', 'Data pemain telah diupdate');
}
}
