@extends('home')

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
            <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Titulo</th>
                            <th>Descricao</th>
                            <th>Localizacao</th>
                            <th>Data</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projetosFotos as $projetosFotos)
                        <tr>
                            <td><a href="/ProjetosFotos/{{ $projetosFotos->id }}/edit">{{ $projetosFotos->titulo }}</a></td>
                            <td>{{ $projetosFotos->descricao }}</td>
                            <td>{{ $projetosFotos->localizacao }}</td>
                            <td class="text-center">{{ $projetosFotos->data }}</td>
                            <td class="text-center">
                                <form role="id" action="/ProjetosFotos/{{ $projetosFotos->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="link" style="background-color: transparent; border: none">
                                        <i class="fas fa-trash text-danger" data-toogle="tooltip" title="Eliminar"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
