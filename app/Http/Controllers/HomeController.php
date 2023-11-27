<?php

namespace App\Http\Controllers;

use App\Models\Matelas;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'matelas' => Matelas::latest('updated_at')->limit(3)->get(),
            'title' => 'Les derniers matelas modifiés'
        ]);
    }
}
