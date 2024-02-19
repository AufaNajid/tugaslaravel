<?php

namespace App\Http\Controllers;
use App\Models\kelas;
use App\Models\Pemain;

use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 10;

        if ($request->has('search')) {
            $pemain = Pemain::where('pemain', 'LIKE', '%' . $request->search . '%')->paginate($perPage)->onEachSide(3);
        } else {
            $pemain = Pemain::paginate($perPage)->onEachSide(3);
        }

        $kelas = Kelas::all(); 

        return view('/Pemain/pemain', [
            'title' => 'pemain',
            'pemain' => $pemain,
            'kelas' => $kelas,
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


public function filter($team_id)
{
    $result = Pemain::where('team_id', $team_id)->paginate(10);

    // Mengecek apakah permintaan berasal dari admin
    if (request()->route()->named('filter_pemain_auth')) {
        return view('/Pemain/pemain', [
            "title" => "pemain",
            "caption" => "Filtered pemain",
            "pemain" => $result,
            "kelas" => Kelas::all()
        ]);
    } else {
        // Jika tidak, berarti permintaan berasal dari guest
        return view('filter_pemain_guest.pemain', [
            "title" => "pemain",
            "caption" => "Filtered pemain",
            "pemain" => $result,
            "kelas" => Kelas::all()
        ]);
    }
}



   
}


