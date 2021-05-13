<?php

namespace App\Http\Controllers;
use App\Models\ProjetosFotos;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projetosFotos = ProjetosFotos::all();

        return view('welcome', compact('projetosFotos'));
    }
}
