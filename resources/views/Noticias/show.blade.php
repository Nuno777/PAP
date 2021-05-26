@extends('ProjetosFotos.home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listagem das Noticias</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Lista das Noticias</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                style="color:#4f5962;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Lista das Noticias</h3>
                        </div>
                        {{-- <div class="row">
                            @foreach ($noticias as $noticia)
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                    <div class="p-4 text-center" style="background-color:#3f474e">
                                        <div class="text-center">
                                            <form method="POST"
                                                action="{{ route('ProjetosFotos.delete', $projetoFoto->id) }}">
                                                <a href="{{ $projetoFoto->id }}/edit"
                                                    class="btn btn-primary pr-30">Editar</a>&nbsp;
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> --}}
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">Titulo da Noticia</th>
                                    <th class="text-center" scope="col">Descricao Noticia</th>
                                    <th class="text-center" scope="col">Data da Noticia</th>
                                    <th class="text-center" scope="col">Eliminar Noticia</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticias as $noticia)
                                    <tr>
                                        <th class="text-center" scope="row">{{ $noticia->id }}</th>
                                        <td class="text-center">{{ $noticia->titulo }}</td>
                                        <td class="text-center">{{ $noticia->noticia }}</td>
                                        <td class="text-center">{{ $noticia->data }}</td>
                                        <td class="text-center">
                                            <form role="form" action="{{ route('Noticias.delete', $noticia->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="link"
                                                    style="background-color: transparent; border:none">
                                                    <i class="fas fa-trash text-danger" data-toogle="tooltip"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Carousel wrapper -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
@endsection
