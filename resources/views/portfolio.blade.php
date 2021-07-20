@extends('outer')

@section('content')

    <body>
        <!-- ======= Mobile nav toggle button ======= -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        <!-- ======= Header ======= -->
        <header id="header">
            <div class="d-flex flex-column">
                <div class="profile">
                    <img src="/assets/img/icon-joao.png" alt="" class="img-fluid rounded-circle">
                    <h1 class="text-light">João Almeida</a></h1>
                    <div class="social-links mt-3 text-center">
                        <a href="https://www.instagram.com/joao.almeida.cyclist/" target="_blank" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://twitter.com/JooAlmeida98" target="_blank" class="twitter"><i
                                class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/joaoalmeidaatleta/" target="_blank" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://www.procyclingstats.com/rider/joao-almeida/2021" target="_blank"
                            class="google-plus"><i class="bx bxl-google"></i></a>
                    </div>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <a href="{{ '/login' }}" class="btn-get-started scrollto "><i
                                class="bx bx-log-in"></i><span>Login</span></a>
                        <li><a href="/#hero"><i class="bx bx-home"></i> <span>Início</span></a></li>
                        <li><a href="/#about"><i class="bx bx-user"></i> <span>Sobre</span></a></li>
                        <li class="active"><a href="/#portfolio"><i class="bx bx-image"></i> Portfolio</a></li>
                        <!--<li><a href="#shop"><i class="bx bx-shopping-bag"></i> <span>Loja</span></a></li>-->
                        <li><a href="/#news"><i class="bx bx-news"></i> Notícias</a></li>
                    </ul>
                </nav><!-- .nav-menu -->
                <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

            </div>
        </header><!-- End Header -->

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs" >
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Informações do Evento</h2>
                        <ol>
                            <li><a href="/#portfolio">Voltar</a></li>
                            <li>Detalhes do Evento</li>
                        </ol>
                    </div>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Portfolio Details Section ======= -->
            <section id="portfolio-details" class="portfolio-details">
                <div class="container">
                    <div class="portfolio-details-container">
                        <div class="owl-carousel portfolio-details-carousel">
                            @foreach ($projetosFotos as $projetosFoto)
                                @php
                                    $tirar = ['name', '{', '}', '[', ']', ':', '"'];
                                    $foto = str_replace($tirar, '', $projetosFoto->images);
                                @endphp
                                <img src="/storage/uploads/{{ $foto }}" class="img-fluid" alt=""
                                    style="max-height: 800px;">
                            @endforeach
                        </div>
                        <div class="portfolio-info">
                            <h3>Informações</h3>
                            <ul>
                                <li><strong>Titulo</strong>: {{ $projetosFoto->titulo }}</li>
                                <li><strong>Localização</strong>: {{ $projetosFoto->localizacao }}</li>
                                <li><strong>Data</strong>: {{ $projetosFoto->data }}</li>
                                <li><span class="badge badge-pill badge-info" style="color: #000 ">Administrador</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{ $projetosFoto->titulo }}</h2>
                        <p>{{ $projetosFoto->descricao }}</p>
                    </div>
                </div>
            </section><!-- End Portfolio Details Section -->
        </main><!-- End #main -->
    </body>

    </html>
@endsection
