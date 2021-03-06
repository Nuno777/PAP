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
                            <li><span>Listar Eventos</span></li>
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
                <!-- left column -->
                <div class="col-md-12" style="background-color: #F3F8FB">
                    <!-- general form elements -->
                    <div class="card card-primary" style="background-color: #F3F8FB">
                        <div class="card-body">
                            <h4 class="title">Listagem dos Eventos</h4>
                        </div>
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

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                                <button
                                                    class="btn btn-light-primary font-weight-bolder btn-sm data-mytitle="
                                                    data-catid={{ $projetoFoto->id }} data-toggle="modal"
                                                    data-target="#edit">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Editar Evento</h4>
                                            </div>
                                            <form action="{{ route('ProjetosFotos.update', $projetoFoto->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('POST')
                                                <div class="form-group row">

                                                    <label
                                                        class="col-xl-3 col-lg-3 col-form-label text-right">Fotos</label>
                                                    <div class="col-lg-9 col-xl-6">

                                                        <input type="file" name="images" >
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <span class="form-text text-muted">Allowed file types: png, jpg,
                                                            jpeg.</span>
                                                    </div>
                                                </div>
                                                <div class="modal-body">

                                                    <input type="text" class="form-control border-0" name="titulo"
                                                        id="titulo" placeholder="{{ $projetoFoto->titulo }}" />
                                                    <input type="text" class="form-control border-0" name="desc" id="desc"
                                                        placeholder="{{ $projetoFoto->descricao }}" />
                                                    <input type="text" class="form-control border-0" name="local" id="local"
                                                        placeholder="{{ $projetoFoto->localizacao }}" />
                                                    <input type="text" class="form-control border-0" name="data" id="data"
                                                        placeholder="{{ $projetoFoto->data }}" />



                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
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
