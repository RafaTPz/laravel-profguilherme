<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function index()
    {
        return view('personagens');
    }
}