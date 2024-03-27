<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
    	// mengambil semua data pengguna
    	$pengguna = Pengguna::all();
    	// return data ke view
    	return view('pengguna', ['pengguna' => $pengguna]);
    }
}
