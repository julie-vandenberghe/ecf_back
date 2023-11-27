<?php

namespace App\Http\Controllers;

use App\Models\Matelas;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'matelas' => Matelas::latest('id')->limit(4)->get(),
        ]);
    }
}
