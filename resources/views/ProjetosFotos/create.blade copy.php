@extends('ProjetosFotos.home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adicionar um Evento</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Adicionar Evento</li>
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
                            <h3 class="card-title">Novo Evento</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="/ProjetosFotos" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputTitulo">Titulo do Evento</label>
                                    <input type="text" class="form-control" id="inputTitulo" name="inputTitulo"
                                        value="{{ old('inputTitulo') }}" placeholder="Insira o titulo do evento" required>
                                    @error('inputTitulo')
                                        <p class="text-danger">
                                            {{ $errors->first('inputTitulo') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputDesc">Descrição do Evento</label>
                                    <input type="text" class="form-control" id="inputDesc" name="inputDesc"
                                        value="{{ old('inputDesc') }}" placeholder="Insira a descrição do evento"
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
                                        value="{{ old('inputLoc') }}" placeholder="Insira a localização do evento"
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
                                        value="{{ old('inputData') }}" placeholder="Insira a data do evento" required>
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
                                            <input type="file" class="custom-file-input" id="images" name="imageFile[]"
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
