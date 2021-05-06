<?php

namespace App\Http\Controllers;

use App\Models\ProjetosFotos;
use Illuminate\Http\Request;

class ProjetosFotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Visualizacao do index
        return view('ProjetosFotos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Criar uma nova foto para a galeria
        return view('ProjetosFotos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $projetosFotos->save();

        $request->validate([
            //'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:4096'
        ]);

        if ($request->hasfile('imageFile')) {
            $i = 1;
            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION); //extensao da foto
                //remover acentos da foto
                $name = preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $projetosFotos);
                //remover espacos da foto
                $name = str_replace(' ', '', $projetosFotos);
                $name = $i . "." . $extension;
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
                $i++;
            }

            $projetosFotos->images = json_encode($imgData);
            $projetosFotos->save();
        }

        return redirect('/ProjetosFotos')->with('message', 'Nova foto inserida com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjetosFotos  $projetosFotos
     * @return \Illuminate\Http\Response
     */
    public function show(ProjetosFotos $projetosFotos)
    {
        //Listagem dos projetosFotos
        $projetosFotos = ProjetosFotos::all(); //select * from projetosFotos;
        return view('ProjetosFotos.show', compact('projetosFotos')); //o compact serve para passar o select
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjetosFotos  $projetosFotos
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjetosFotos $projetosFotos)
    {
        //Editar qualquer foto da galeria
        $projetosFotos = ProjetosFotos::all(); //select * from projetosFotos;
        return view('ProjetosFotos.edit', compact('projetosFotos')); //o compact serve para passar o select
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjetosFotos  $projetosFotos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjetosFotos $projetosFotos)
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

        return redirect('/ProjetosFotos')->with('message', 'Informacoes da foto alterada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjetosFotos  $projetosFotos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjetosFotos $projetosFotos)
    {
        //eliminar um projeto
        $projetosFotos->delete();

        return redirect('/ProjetosFotos/show')->with('message', 'Foto eliminada com sucesso!!');
    }
}
