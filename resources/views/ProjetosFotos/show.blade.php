@extends('ProjetosFotos.home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista das Fotos da Galeria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Lista das Fotos</li>
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
                            <h3 class="card-title">Lista das Fotos</h3>
                        </div>
                        <br>
                        <!-- /.card-header -->
                        <!-- Gallery -->
                        <div class="row">
                            @foreach ($projetosFotos as $projetoFoto)
                                @php
                                    $images = json_decode($projetoFoto->images);
                                @endphp
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                    <div class=" bg-dark rounded shadow-sm"><img src="/uploads/{{ $images[0] }}" alt=""
                                            style="height: 250px; widht: 100;" class="img-fluid card-img-top">
                                        <div class="p-4 text-center" style="background-color:#3f474e">
                                            <h4>{{ $projetoFoto->titulo }}</h4>
                                            <p>{{ $projetoFoto->descricao }}</p>
                                            <div class="text-center">
                                                <form method="POST" action="{{ route('ProjetosFotos.delete', $projetoFoto->id) }}">
                                                    <a href="{{ $projetoFoto->id }}/edit" class="btn btn-primary pr-30">Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Inner -->
                    </div>
                    <!-- Carousel wrapper -->
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
