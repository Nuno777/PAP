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
                                    <li><span>Adicionar Notícia</span></li>
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
                            <h4 class="title">Nova Notícia</h4>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/Noticias" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputTituloNotic">Titulo da Notícia</label>
                                    <input type="text" class="form-control" id="inputTituloNotic" name="inputTituloNotic"
                                        value="{{ old('inputTituloNotic') }}" placeholder="Insira o titulo da notícia"
                                        required>
                                    @error('inputTituloNotic')
                                        <p class="text-danger">
                                            {{ $errors->first('inputTituloNotic') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputNotic">Notícia</label>
                                    <textarea type="text" class="form-control" id="inputNotic" name="inputNotic"
                                        value="{{ old('inputNotic') }}" placeholder="Insira a notícia" required></textarea>
                                    @error('inputNotic')
                                        <p class="text-danger">
                                            {{ $errors->first('inputNotic') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputDataNotic">Data da Notícia</label>
                                    <input type="date" class="form-control" id="inputDataNotic" name="inputDataNotic"
                                        value="{{ old('inputDataNotic') }}" placeholder="Insira a data da notícia"
                                        required>
                                    @error('inputDataNotic')
                                        <p class="text-danger">
                                            {{ $errors->first('inputDataNotic') }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" id="btnEnviar"
                                    name="btnEnviar">Enviar</button>&nbsp;
                                <button type="reset" class="btn btn-danger" id="btnLimpar" name="btnLimpar">Limpar</button>
                            </div>
                        </form>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
