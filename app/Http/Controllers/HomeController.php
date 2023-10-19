<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home() {
        return view('welcome');
    }

    public function services() {
        return view('services');
    }
}
