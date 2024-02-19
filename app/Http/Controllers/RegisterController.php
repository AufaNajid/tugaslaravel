<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Tambahkan ini
use App\Models\User; 

class RegisterController extends Controller
{
    public function index()
    {
        return view('/Register/register', [
            'title' => 'register',

        ]);

    }

    public function create()
    {


    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
    
          $userData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];
    
        // Gunakan array yang diekstrak untuk membuat pengguna baru
        User::create($userData);
    
        $request->session()->flash('success', 'Register berhasil, silahkan login !');
    
        return redirect('/login');
    }
    
}
