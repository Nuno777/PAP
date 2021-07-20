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
                            <li><span>Novo Evento</span></li>
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
        <!-- page title area end -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row" style="background-color: #F3F8FB">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary" style="background-color: #F3F8FB">
                        <div class="card-body">
                            <h4 class="title">Novo Evento</h4>
                        </div>
                        <!-- form start -->
                        <form role="form" method="POST" action="/ProjetosFotos" enctype="multipart/form-data"
                            style="background-color: #F3F8FB">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputTitulo">Titulo do Evento</label>
                                    <input type="text" class="form-control" id="inputTitulo" name="inputTitulo"
                                        value="{{ old('titulo') }}" placeholder="Insira o titulo do evento" required>
                                    @error('inputTitulo')
                                        <p class="text-danger">
                                            {{ $errors->first('inputTitulo') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputDesc">Descrição do Evento</label>
                                    <input type="text" class="form-control" id="inputDesc" name="inputDesc"
                                        value="{{ old('descricao') }}" placeholder="Insira a descrição do evento"
                                        required>
                                    @error('inputDesc')
                                        <p class="text-danger">
                                            {{ $errors->first('inputDesc') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputLoc">Localização do Evento</label>
                                    <input type="text" class="form-control"
                                        onkeypress="return /[A-Za-z\s]/i.test(event.key)" id="inputLoc" name="inputLoc"
                                        value="{{ old('localizacao') }}" placeholder="Insira a localização do evento"
                                        required>
                                    @error('inputLoc')
                                        <p class="text-danger">
                                            {{ $errors->first('inputLoc') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputData">Data do Evento</label>
                                    <input type="date" class="form-control" id="inputData" name="inputData"
                                        value="{{ old('data') }}" placeholder="Insira a data do evento" required>
                                    @error('inputData')
                                        <p class="text-danger">
                                            {{ $errors->first('inputData') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Fotos do Evento</label>
                                    <div class="user-image mb-3 text-center">
                                        <div class="imgPreview"> </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="images" value="{{ old('images') }}" name="imageFile[]"
                                                multiple="multiple" required>
                                            <label class="custom-file-label" for="images">Insira as fotos</label>
                                        </div>
                                        @error('imageFile')
                                            <p class="text-danger">
                                                {{ $errors->first('imageFile') }}
                                            </p>
                                        @enderror
                                        @error('imageFile.*')
                                            @foreach ($errors->all() as $error)
                                                <p class="text-danger">
                                                    {{ $error }}
                                                </p>
                                            @endforeach
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary mb-3" id="btnEnviar"
                                    name="btnEnviar">Enviar</button>&nbsp;
                                <button type="reset" class="btn btn-danger mb-3" id="btnLimpar"
                                    name="btnLimpar">Limpar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
