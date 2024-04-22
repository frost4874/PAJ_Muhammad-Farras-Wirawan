<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
    	$guru = Guru::All();
    	return view('guru', ['guru' => $guru]);
    }

    public function hapus($id)
{
    	$guru = Guru::find($id);
    	$guru->delete();
 
    	return redirect('/guru');
}
public function trash()
{
    	// mengampil data guru yang sudah dihapus
    	$guru = Guru::onlyTrashed()->get();
    	return view('guru_trash', ['guru' => $guru]);
}
public function kembalikan_semua()
{
    		
    	$guru = Guru::onlyTrashed();
    	$guru->restore();
 
    	return redirect('/guru/trash');
}
public function restore($id)
{
    	$guru = Guru::onlyTrashed($id);
    	$guru->restore();
 
    	return redirect('/guru/trash');
}
}
