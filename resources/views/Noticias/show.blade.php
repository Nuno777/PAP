@extends('ProjetosFotos.home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-3 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="/">
                        <h4 class="page-title pull-left nav-link">Pagina Principal</h4>
                    </a>
                </div>

            </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                        <h4 class="page-title pull-left">Administração</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="/home">Home</a></li>
                            <li><span>Lista das Notícias</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <div class="ml-auto">
                            <a style="color: #313b3d" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="col-md-12" style="background-color: #F3F8FB">
                    <!-- general form elements -->
                    <div class="card card-primary" style="background-color: #F3F8FB">
                        <div class="card-body">
                            <h4 class="title">Lista das Notícias</h4>
                        </div>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Titulo</th>
                                            <th scope="col">Notícia</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($noticias as $noticia)
                                            <tr>
                                                <th scope="row">{{ $noticia->id }}</th>
                                                <td>{{ $noticia->titulo }}</td>
                                                <td>{{ $noticia->noticia }}</td>
                                                <td>{{ $noticia->data }}</td>
                                                <td>
                                                    <a href="{{ $noticia->id }}/edit">
                                                        <button type="submit" class="link"
                                                            style="background-color: transparent; border:none">
                                                            <i class="ti-pencil" data-toogle="tooltip"></i>
                                                    </a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <form role="form"
                                                        action="{{ route('Noticias.delete', $noticia->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="link"
                                                            style="background-color: transparent; border:none">
                                                            <i class="ti-trash text-danger" data-toogle="tooltip"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
