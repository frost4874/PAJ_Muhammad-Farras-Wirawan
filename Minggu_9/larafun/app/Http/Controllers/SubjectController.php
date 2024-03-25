<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class SubjectController extends Controller
{
    public function studentview()
    {
        return view('sv_sc');
    }
    public function teacherview()
    {
        return view('tv_sc');
    }
    public function adminview()
    {
        return view('av_sc');
    }
}
