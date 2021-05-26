@extends('admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Administração</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Inicio</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="{{ url('/ProjetosFotos/show') }}">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="far fa-calendar-alt"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Eventos</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </a>
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="far fa-address-card"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Sobre</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Loja</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <a href="{{ url('/Noticias/show') }}">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="far fa-newspaper"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Noticias</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p>Eventos</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-calendar-alt"></i><br>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <p>Sobre</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-address-card"></i><br>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <p>Loja</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i><br>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner" style="color: #fff">
                            <p>Noticias</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-newspaper"></i><br>
                        </div>
                        <a href="#" class="small-box-footer ">Gerir Noticias <i class="fas fa-arrow-circle-right"
                                style="color: #fff"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
