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
                    <h2>Sobre João Almeida</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>João Almeida</h3>
                        <p class="font-italic">
                            Atualmente encontra-se na equipa da Deceuninck - Quick Step.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Birthday: </strong>5 de Agosto de 1998
                                        (22) </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nationality: </strong>Portuguesa </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Weight: </strong>63 kg </li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Height: </strong>1.78 m </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                            omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                            neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni
                            laudantium dolores.
                        </p>
                    </div>
                </div>

            </div><!-- End About Section -->

            <!-- ======= Resume Section ======= -->
            <div class="resume">
                <div class="container">

                    <div class="section-title">
                        <br><br>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                            sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                            ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-up">
                            <h3 class="resume-title">Sumary</h3>
                            <div class="resume-item pb-0">
                                <h4>Alex Smith</h4>
                                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing
                                        and developing user-centered digital/print marketing material from initial concept
                                        to final, polished deliverable.</em></p>
                                <ul>
                                    <li>Portland par 127,Orlando, FL</li>
                                    <li>(123) 456-7891</li>
                                    <li>alice.barkley@example.com</li>
                                </ul>
                            </div>

                            <h3 class="resume-title">Education</h3>
                            <div class="resume-item">
                                <h4>Master of Fine Arts &amp; Graphic Design</h4>
                                <h5>2015 - 2016</h5>
                                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                                    voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                            </div>
                            <div class="resume-item">
                                <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                                <h5>2010 - 2014</h5>
                                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel
                                    ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae
                                    consequatur neque etlon sader mart dila</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Professional Experience</h3>
                            <div class="resume-item">
                                <h4>Senior graphic design specialist</h4>
                                <h5>2019 - Present</h5>
                                <p><em>Experion, New York, NY </em></p>
                                <ul>
                                    <li>Lead in the design, development, and implementation of the graphic, layout, and
                                        production communication materials</li>
                                    <li>Delegate tasks to the 7 members of the design team and provide counsel on all
                                        aspects of the project. </li>
                                    <li>Supervise the assessment of all graphic materials in order to ensure quality and
                                        accuracy of the design</li>
                                    <li>Oversee the efficient use of production project budgets ranging from $2,000 -
                                        $25,000</li>
                                </ul>
                            </div>
                            <div class="resume-item">
                                <h4>Graphic design specialist</h4>
                                <h5>2017 - 2018</h5>
                                <p><em>Stepping Stone Advertising, New York, NY</em></p>
                                <ul>
                                    <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                        and advertisements).</li>
                                    <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                    <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                    <li>Created 4+ design presentations and proposals a month for clients and account
                                        managers</li>
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
                    <p>Alguns trofeus que João Almeida ganhou no ciclismo</p>
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
                                    <a href="/portfolio" title="Saber mais"><i class="bx bx-link"></i></a>
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
