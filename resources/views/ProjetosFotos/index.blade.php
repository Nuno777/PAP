@extends('admin')

@section('content')
    <!-- main content area start -->
    <div class="main-content">
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
                    <a href="/"><h4 class="page-title pull-left nav-link">Pagina Principal</h4></a>
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
                            <li ><a href="/home" >Home</a></li>
                            <li><span>Dashboard</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <div class="ml-auto">
                            <a style="color: #313b3d" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
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
        <div class="main-content-inner">
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
                <!-- seo fact area start -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-4 mt-5 mb-3">
                            <div class="card">
                                <a href="{{ url('/ProjetosFotos/show') }}">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><strong>Listar Eventos</strong></div>
                                            <div class="seofct-icon"><i class="ti-calendar"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 mb-3">
                            <div class="card">
                                <a href="">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><strong>Editar Sobre</strong></div>
                                            <div class="seofct-icon"><i class="ti-id-badge"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 mb-3">
                            <div class="card">
                                <a href="{{ url('/Noticias/show') }}">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><strong>Gerir Notícias</strong></div>
                                            <div class="seofct-icon"><i class="ti-receipt"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seo fact area end -->
            </div>
        </div>
    </div>
    <!-- main content area end -->
@endsection
