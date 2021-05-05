@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Projetos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Listar Projetos</li>
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
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                        <h3 class="card-title">Listagem de Projetos</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="projetos" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Designação</th>
                                    <th>Categoria</th>
                                    <th>Autor(es)</th>
                                    <th>Data de Início</th>
                                    <th>Github</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                              <tbody>
                                @foreach ($projetos as $projeto)
                                <tr>
                                    <td><a href="/projetos/{{ $projeto->id }}/edit">{{$projeto->designacao}}</a></td>
                                    <td>{{$projeto->categoria->designacao}}</td>
                                    <td>{{$projeto->responsavel}}</td>
                                    <td>{{$projeto->dataInicio}}</td>
                                    <td><a href="{{ $projeto->github}}">{{ $projeto->github}}</a></td>
                                    <td class="text-center">
                                        <form role="form" action="/projetos/{{ $projeto->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="link"
                                                style="background-color: transparent; border:none">
                                                <i class="fas fa-trash text-danger" data-toogle="tooltip"
                                                    title="Eliminar"></i>
                                            </button>
                                        </form>
                                    </td>
                                    @endforeach
                              </tbody>
                            </tfoot>
                        </table>
                    </div>
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
