<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->level === User::ADMIN) {
            return view('administrator.dashboard');
        }

        if (auth()->user()->level === User::SD) {
            return view('primary.dashboard');
        }
        if (auth()->user()->level === User::SMP) {
            return view('junior.dashboard');
        }
    }
}
