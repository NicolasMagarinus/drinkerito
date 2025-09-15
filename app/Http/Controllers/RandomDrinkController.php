<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomDrinkController extends Controller
{
    public function index()
    {
        return view('random');
    }
}
