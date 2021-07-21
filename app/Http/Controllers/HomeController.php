<?php

namespace App\Http\Controllers;

use App\Models\ProjetosFotos;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       // $projetosFotos = ProjetosFotos::all();

        $projetosFotos = DB::select('select * from projetos_fotos');
        $noticias =DB::select('select * from noticias');
        //$tirar = array("name", "{" , "}","[","]",":" , '"');
        //$projetosFotos = array(str_replace($tirar,'',$querryDB));
        //dd($projetosFotos);
        //dd($noticias);

        return view('welcome', compact('projetosFotos','noticias'));
    }

    public function portfolio()
    {
       // $projetosFotos = ProjetosFotos::all();

        $projetosFotos = DB::select('select * from projetos_fotos');

        return view('portfolio',compact('projetosFotos'));
    }

}
