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
            <li class="breadcrumb-item"><a href="">Home</a></li>
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
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#4f5962;" >
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
            <!-- /.card-header -->
            <!-- Gallery -->
                    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center"data-mdb-ride="carousel">
                    <!-- Inner -->
                    <div class="carousel-inner py-4">
                        <!-- Single item -->
                        @foreach ($projetosFotos as $projetosFotos)
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                            @php
                                                $images = json_decode($projetosFotos->images);
                                            @endphp
                                                <img src="/uploads/{{ $images[0] }}" class="card-img-top" widht="100" height="180" />
                                                <div class="card-body text-center">
                                                    <h4>{{$projetosFotos->titulo}}</h4>
                                                    <p class="card-text">
                                                    {{$projetosFotos->descricao}}
                                                    </p>
                                                    <a href="{{ $projetosFotos->id }}/edit" class="btn btn-primary pr-30">Editar</a> <a href="" class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
