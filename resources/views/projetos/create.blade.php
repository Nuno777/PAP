@extends('home')

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
                    <li class="breadcrumb-item active">Novo Projeto</li>
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
                        <h3 class="card-title">Novo Projeto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="/projetos" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputDesig">Designação</label>

                                <input type="text" class="form-control"
                                    onkeypress="return /[A-Za-z\s]/i.test(event.key)" required
                                    value="{{ old('inputDesig') }}" name="inputDesig" id="inputDesig"
                                    placeholder="Insira a designação do projeto">
                                @error('inputDesig')
                                <p class="text-danger">
                                    {{ $errors->first('inputDesig') }}
                                </p>
                                @enderror
                            </div>
                            <!--<div class="form-group">
                                <label for="selectCat">Categoria</label>
                                <select class="form-control select2" name="selectCat" id="selectCat"
                                    style="width: 100%;">
                                    <option value="DO"  selected="selected">Selecione uma categoria</option>

                                    @foreach ($categorias as $categoria)
                                    @if (old('selectCat')==$categoria->id)
                                    <option value="{{ $categoria->id }}" selected>{{ $categoria->designacao}}</option>
                                    @else
                                    <option value="{{ $categoria->id }}">{{ $categoria->designacao}}</option>
                                    @endif

                                    @endforeach

                                </select>

                                @error('selectCat')
                                <p class="text-danger">{{ $errors->first('selectCat') }}
                                </p>
                                @enderror
                            </div>-->
                            <div class="form-group">
                                <label for="inputResp">Aluno(s) Responsável(eis)</label>
                                <input type="text" class="form-control" required value="{{ old('inputResp') }}"
                                    id="inputResp" name="inputResp"
                                    placeholder="Insira o(s) nome(s) do(s) aluno(s) responsável(eis) pelo projeto">

                                @error('inputResp')
                                <p class="text-danger">{{ $errors->first('inputResp') }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputData">Data de Início do Projeto</label>
                                <input type="date" class="form-control" required value="{{ old('inputData') }}"
                                    id="inputData" name="inputData">

                                @error('inputData')
                                <p class="text-danger">{{ $errors->first('inputData') }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputGit">Github</label>
                                <input type="text" class="form-control" required value="{{ old('inputGit') }}"
                                    id="inputGit" name="inputGit" placeholder="Insira o link do Github do projeto">

                                @error('inputGit')
                                <p class="text-danger">{{ $errors->first('inputGit') }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="textDesc">Descrição</label>
                                <textarea class="form-control" rows="5" required id="textDesc" name="textDesc"
                                    placeholder="Descreva aqui o projeto">{{ old('textDesc') }}</textarea>

                                @error('textDesc')
                                <p class="text-danger">{{ $errors->first('textDesc') }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Fotos</label>
                                <div class="user-image mb-3 text-center">
                                    <div class="imgPreview"> </div>
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="images" name="imageFile[]"
                                            multiple="multiple">
                                        <label class="custom-file-label" for="images">Insira as fotos</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload Fotos</span>
                                    </div>
                                </div>
                            </div>
                            @error('imageFile')
                            <p class="text-danger">{{ $errors->first('imageFile') }}
                            </p>
                            @enderror
                            @error('imageFile.*')
                            @foreach ($errors->all() as $error)
                            <p class="text-danger">
                                {{ $error}}
                            </p>
                            @endforeach
                            @enderror
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success" id="btnEnviar"
                                name="btnEnviar">Enviar</button>
                            <button type="reset" class="btn btn-warning" id="btnLimpar" name="btnLimpar">Limpar</button>
                        </div>
                    </form>
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
