@extends('outer')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>João Almeida</h1>
            <p><span class="typed" data-typed-items="BOTA LUME, #TEAM BOTA LUME"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Sobre o João Almeida</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>João Almeida</h3>
                        <p class="font-italic" align="justify">
                            João Almeida ciclista português em 2016 torna-se duplo campeão de Portugal, no ciclismo de
                            estrada e no contrarrelógio. Em 2017 assinou com a equipa Bulgária Unieuro Trevigiani - Hemus
                            1896 onde conquistou a terceira posição no contrarrelógio de Portugal.
                        </p>
                        <p class="font-italic" align="justify">
                            Em 2018 assinou contrato pela equipa Hagens Berman Axeon até 2019, em 2018 ficou em segundo
                            lugar no Campeonato de Portugal de ciclismo de estrada e no contrarrelógio.
                        </p>
                        <p class="font-italic" align="justify">
                            Atualmente o ciclista João Almeida encontra-se na equipa da Deceuninck - Quick Step, onde
                            conquistou em 2020 quarto lugar na classificação geral do Giro d'Italia.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday: </strong>5 de Agosto de 1998
                                        (22) </li>
                                        <li><i class="icofont-rounded-right"></i> <strong>Place of birth: </strong>Caldas da Rainha </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nationality: </strong>Portuguesa </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Weight: </strong>63 kg </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Height: </strong>1.78 m </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End About Section -->

            <!-- ======= Resume Section ======= -->
            <div class="resume">
                <div class="container">

                    <div class="section-title">
                        <br><br>
                        <h4>Palmarés em Estrada</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-up">
                            <div class="resume-item">
                                <h5>2018</h5>
                                <br><br>
                                <ul>
                                    <li>Segundo lugar do Campeonato de Portugal do contrarrelógio</li>
                                    <li>Segundo lugar do Campeonato de Portugal do ciclismo de estrada</li>
                                    <li>Segundo lugar do Giro d'Itália</li>
                                    <li>Décimo lugar do Campeonato Europeu do contrarrelógio</li>
                                </ul>
                            </div>
                            <div class="resume-item">
                                <h5>2019</h5>
                                <br><br>
                                <ul>
                                    <li>Campeão de Portugal do ciclismo de estrada</li>
                                    <li>Campeão de Portugal do contrarrelógio</li>
                                    <li>Quarto lugar do The Larry H.Miller Tour of Utah </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="resume-item">
                                <h5>2020</h5>
                                <br><br>
                                <ul>
                                    <li>Segundo lugar do Giro de Emília</li>
                                    <li>Terceiro lugar da Volta a Burgos</li>
                                    <li>Terceiro lugar da Semana internacional Coppi e Bartali</li>
                                    <li>Quarto lugar do Giro d'Itália</li>
                                </ul>
                            </div>
                            <div class="resume-item">
                                <h5>2021</h5>
                                <br><br>
                                <ul>
                                    <li>Sexto lugar do Giro d'Itália</li>
                                    <li>Terceiro lugar do UAE Tour</li>
                                    <li>Sexto lugar do Tirreno-Adriatico</li>
                                    <li>Sétimo lugar da Volta Ciclista a Catalunya</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Facts Section ======= -->
        {{-- <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">232</span>
                            <p><strong>Happy Clients</strong> consequuntur quae</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">521</span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up">1,463</span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">15</span>
                            <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Facts Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        {{-- <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-2021">2021</li>
                        </ul> --}}
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($projetosFotos as $projetosFoto)
                        @php
                            $tirar = ['name', '{', '}', '[', ']', ':', '"'];
                            $foto = str_replace($tirar, '', $projetosFoto->images);
                        @endphp
                        <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
                            <div class="portfolio-wrap">
                                <img src="/storage/uploads/{{ $foto }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="/storage/uploads/{{ $foto }}" data-gall="portfolioGallery"
                                        class="venobox" title="Foto"><i class="bx bx-plus"></i></a>
                                    <a href="/portfolio/{{ $projetosFoto->id }}" title="Saber mais"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="news" class="testimonials ">
            <div class="container">

                <div class="section-title">
                    <h2>Notícias</h2>
                </div>
                <div class="row">
                    @foreach ($noticias as $noticia)
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class=" card-bordered">
                                    <div class="card-body">
                                        <h5 class="title"><strong>{{ $noticia->titulo }}</strong></h5>
                                        <p class="card-text">{{ $noticia->noticia }}</p>
                                        <span class="badge badge-pill badge-info"
                                            style="color: #000">{{ $noticia->id }}</span>
                                        <span class="badge badge-pill badge-info" style="color: #000">Administrador</span>
                                        <span class="badge badge-pill badge-info"
                                            style="color: #fff;  background-color: #17a2b8">{{ $noticia->data }}</span>
                                    </div>

                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->
@endsection
