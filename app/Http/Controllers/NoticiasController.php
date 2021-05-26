<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function home()
    {
        return view('ProjetosFotos.home');
    }

    public function index()
    {
        //Visualizacao do index
        return view('ProjetosFotos.index');
    }

    public function create()
    {
        //Criar uma noticia
        return view('Noticias.create');
    }

    public function store(Request $request)
    {
        //Validação do formulario de noticia
        request()->validate([
            'inputTituloNotic' => 'required',
            'inputNotic' => 'required',
            'inputDataNotic' => 'required'
        ]);

        //Inserção de dados no formulario de noticia
        $noticias = new noticias();
        $noticias->titulo = request('inputTituloNotic');
        $noticias->noticia = request('inputNotic');
        $noticias->data = request('inputDataNotic');
        $noticias->save();

        return redirect('/Noticias')->with('message', 'Nova noticia inserido com sucesso!!');
    }

    public function show(Noticias $noticias)
    {
        //Listagem dos noticias
        $noticias = Noticias::all(); //select * from noticias;
        return view('Noticias.show', compact('noticias')); //o compact serve para passar o select
    }

    public function edit($projectNoticId)
    {
        //Editar qualquer foto da galeria
        $noticias = Noticias::find($projectNoticId); //select * from noticias;

        return view('Noticias.edit', compact('noticias', 'projectNoticId')); //o compact serve para passar o select
    }

    public function update(Request $request, $noticias)
    {
        //Validação do formulario de noticia
        request()->validate([
            'inputTituloNotic' => 'required',
            'inputNotic' => 'required',
            'inputDataNotic' => 'required'
        ]);

        //Inserção de dados no formulario de noticia
        $noticias->titulo = request('inputTituloNotic');
        $noticias->noticia = request('inputNotic');
        $noticias->data = request('inputDataNotic');
        $noticias->save();

        return redirect('/Noticias/show')->with('message', 'Informacoes da noticia alterada com sucesso!!');
    }

    public function destroy($noticias)
    {
        //eliminar a noticia
        Noticias::find($noticias)->delete();

        return redirect('/Noticias/show')->with('message', 'Noticia eliminada com sucesso!!');
    }
}
