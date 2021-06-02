@extends('ProjetosFotos.home')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar um Evento</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Editar Evento</li>
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
                            <h3 class="card-title">Editar Evento</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="" action="/ProjetosFotos/" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputTitulo">Titulo do Evento</label>
                                    <input type="text" class="form-control" id="inputTitulo" name="inputTitulo"
                                        value="{{ old('titulo') ?? $projetosFotos->titulo }}"
                                        placeholder="Insira o titulo do evento" required>
                                    @error('inputTitulo')
                                        <p class="text-danger">
                                            {{ $errors->first('inputTitulo') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputDesc">Descrição do Evento</label>
                                    <input type="text" class="form-control" id="inputDesc" name="inputDesc"
                                        value="{{ old('descricao') ?? $projetosFotos->descricao }}"
                                        placeholder="Insira a descrição do evento" required>
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
                                        value="{{ old('localizacao') ?? $projetosFotos->localizacao }}"
                                        placeholder="Insira a localização do evento" required>
                                    @error('inputLoc')
                                        <p class="text-danger">
                                            {{ $errors->first('inputLoc') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputData">Data do Evento</label>
                                    <input type="date" class="form-control" id="inputData" name="inputData"
                                        value="{{ old('data') ?? $projetosFotos->data }}"
                                        placeholder="Insira a data do evento" required>
                                    @error('inputData')
                                        <p class="text-danger">
                                            {{ $errors->first('inputData') }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Fotos do Evento</label>
                                    <div class="user-image mb-3 text-center">
                                        <div class="imgPreview">
                                            @foreach (json_decode($projetosFotos->images) as $images)
                                                <span class="pic" id="{{ $loop->index }}">
                                                    <a href="javascript:void(0)"
                                                        onclick="deletefoto('{{ $images }}','{{ $loop->index }}')">
                                                        <i class="fas fa-times close text-danger"></i>
                                                    </a>
                                                    <img width="250" class="img-thumbnail"
                                                        src="/storage/uploads/{{ $images }}" alt="">
                                                </span>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="images" name="imageFile[]"
                                                multiple="multiple">
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
                                    name="btnEnviar">Editar</button>
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
