@extends('ProjetosFotos.home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- header area start -->
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
                            <li><span>Lista dos Eventos</span></li>
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
                            <h4 class="title">Lista dos Eventos</h4>
                        </div>
                        <!-- Gallery -->
                        <div class="row">
                            @foreach ($projetosFotos as $projetoFoto)
                                @php
                                    $images = json_decode($projetoFoto->images);
                                @endphp
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                    <div class="card card-bordered">
                                        <img src="/storage/uploads/{{ $images[0] }}" alt=""
                                            style="height: 250px; widht: 100;" class="img-fluid card-img-top">
                                        <div class="card-body text-center">
                                            <h5 class="title">{{ $projetoFoto->titulo }}</h5>
                                            <p class="card-text">{{ $projetoFoto->descricao }}</p>
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
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
