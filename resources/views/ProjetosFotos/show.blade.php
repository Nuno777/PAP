@extends('home')

@section('content')
   <!-- Content Header (Page header) -->
   <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Lista Das Fotos da Galeria</h1>
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
                            <td><a href="/projetosFotos/{{ $projetosFotos->id }}/edit">{{ $projetosFotos->titulo }}</a></td>
                            <td>{{ $projetosFotos->descricao }}</td>
                            <td>{{ $projetosFotos->localizacao }}</td>
                            <td class="text-center">{{ $projetosFotos->data }}</td>
                            <td class="text-center"><i class="fas fa-trash text-danger"></i></td>
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
