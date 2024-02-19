<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View\View;

class UserController extends Controller
{
    public function studentuser()
    {
        return view('su_uc');
    }
    public function teacheruser()
    {
        return view('tu_uc');
    }
    public function adminuser()
    {
        return view('au_uc');
    }
}