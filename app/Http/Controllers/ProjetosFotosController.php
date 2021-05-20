<?php

namespace App\Http\Controllers;

use App\Models\ProjetosFotos;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetosFotosController extends Controller
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
        //Criar uma nova foto para a galeria
        return view('ProjetosFotos.create');
    }

    public function store(Request $request)
    {
        //Validação do formulario projetosfotos
        request()->validate([
            'inputTitulo' => 'required',
            'inputDesc' => 'required',
            'inputLoc' => 'required',
            'inputData' => 'required'
        ]);

        //Inserção de dados no formulario projetosfotos
        $projetosFotos = new ProjetosFotos();
        $projetosFotos->titulo = request('inputTitulo');
        $projetosFotos->descricao = request('inputDesc');
        $projetosFotos->localizacao = request('inputLoc');
        $projetosFotos->data = request('inputData');
        $projetosFotos->images = request('image');

        $request->validate([
            //'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:4096'
        ]);

        if ($request->hasfile('imageFile')) {
            $i = 1;
            foreach ($request->file('imageFile') as $file) {
                $nameOriginal =  $file->getClientOriginalName();
                //extensao da foto
                $extension = pathinfo($nameOriginal, PATHINFO_EXTENSION);
                //remover acentos da foto
                $nameSemACENTOS = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $nameOriginal);
                //remover espacos da foto
                $name = str_replace(' ', '', $nameSemACENTOS);
                //$name = $nameSemACENTOS . $i . '.' . $extension;
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
                $i++;
            }

            $projetosFotos->images = json_encode($imgData);
            $projetosFotos->save();
        }
        return redirect('/ProjetosFotos')->with('message', 'Novo evento inserido com sucesso!!');
    }

    public function show(ProjetosFotos $projetosFotos)
    {
        //Listagem dos projetosFotos
        $projetosFotos = ProjetosFotos::all(); //select * from projetosFotos;
        return view('ProjetosFotos.show', compact('projetosFotos')); //o compact serve para passar o select

        return view('ProjetosFotos.portfolio');
    }

    public function edit($projectId)
    {
        //Editar qualquer foto da galeria
        $projetosFotos = ProjetosFotos::find($projectId); //select * from projetosFotos;
        if ($projectId) {
            json_decode($projectId);
        } else {
            $projectId = [];
        }
        return view('ProjetosFotos.edit', compact('projetosFotos','projectId')); //o compact serve para passar o select
    }

    public function update(Request $request, $projectId, $projetosFotos)
    {
        //Validação do formulario projetosfotos
        request()->validate([
            'inputTitulo' => 'required',
            'inputDesc' => 'required',
            'inputLoc' => 'required',
            'inputData' => 'required'
        ]);
        //Inserção de dados no formulario projetosfotos
        $projetosFotos->titulo = request('inputTitulo');
        $projetosFotos->descricao = request('inputDesc');
        $projetosFotos->localizacao = request('inputLoc');
        $projetosFotos->data = request('inputData');
        $projetosFotos->images = request('image');

        $projetosFotos->save();

        return redirect('/ProjetosFotos/show')->with('message', 'Informacoes do evento alterado com sucesso!!');
    }

    public function destroy($projetosFotos)
    {
        //eliminar um projeto
        ProjetosFotos::find($projetosFotos)->delete();
        //elimina a foto da pasta
        Storage::delete('/uploads/');
        return redirect('/ProjetosFotos/show')->with('message', 'Evento eliminada com sucesso!!');
    }
}
