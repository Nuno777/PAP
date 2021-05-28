@extends('ProjetosFotos.home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar uma Notícia</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Adicionar Notícia</li>
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
                            <h3 class="card-title">Nova Notícia</h3>
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
                                    <input type="text" class="form-control" id="inputNotic" name="inputNotic"
                                        value="{{ old('inputNotic') }}" placeholder="Insira a notícia" required>
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
                            <div class="card-footer">
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
