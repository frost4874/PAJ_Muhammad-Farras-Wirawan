<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function option()
    {
        return view('option');
    }
}