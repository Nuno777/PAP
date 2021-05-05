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
        //
        return view('ProjetosFotos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:4096'
        ]);

        //Inserção de dados no formulario projetosfotos
        $projetosFotos = new ProjetosFotos();
        $projetosFotos->titulo = request('inputTitulo');
        $projetosFotos->descricao = request('inputDesc');
        $projetosFotos->localizacao = request('inputLoc');
        $projetosFotos->data = request('inputData');
        $projetosFotos->images = request('image');
        $projetosFotos->save();

        if ($request->hasfile('imageFile')) {
            foreach ($request->file('imageFile') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
            }

            $projetosFotos->images = json_encode($imgData);

            $projetosFotos->save();

            return back()->with('success', 'File has successfully uploaded!');
        }

        return redirect('/ProjetosFotos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjetosFotos  $projetosFotos
     * @return \Illuminate\Http\Response
     */
    public function show(ProjetosFotos $projetosFotos)
    {
        //
        return view('ProjetosFotos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjetosFotos  $projetosFotos
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjetosFotos $projetosFotos)
    {
        //
        return view('ProjetosFotos.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjetosFotos  $projetosFotos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjetosFotos $projetosFotos)
    {
        //
    }
}
