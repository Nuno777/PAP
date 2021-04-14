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
        //
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
