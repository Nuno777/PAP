<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/dist/img/user.png">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dist/css/themify-icons.css">
    <link rel="stylesheet" href="/dist/css/metisMenu.css">
    <link rel="stylesheet" href="/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/dist/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="/dist/css/typography.css">
    <link rel="stylesheet" href="/dist/css/default-css.css">
    <link rel="stylesheet" href="/dist/css/styles.css">
    <link rel="stylesheet" href="/dist/css/responsive.css">
    <!-- modernizr css -->
    <script src="/dist/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form>
                    <div class="login-form-head">
                        <h4>Sign Up</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <input id="name" placeholder="Name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <div class="text-danger">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-gp">
                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            <div class="text-danger">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-gp">
                            <input id="password" placeholder="Password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            <div class="text-danger">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-gp">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">

                            <div class="text-danger">

                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button type="submit" class="btn btn-primary">
                                {{ ('Register') }}
                            </button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Já tem conta clique<a href="/login">aqui</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="/dist/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/dist/js/popper.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/dist/js/owl.carousel.min.js"></script>
    <script src="/dist/js/metisMenu.min.js"></script>
    <script src="/dist/js/jquery.slimscroll.min.js"></script>
    <script src="/dist/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="/dist/js/plugins.js"></script>
    <script src="/dist/js/scripts.js"></script>
</body>

</html>
{{-- <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Erro 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dist/css/themify-icons.css">
    <link rel="stylesheet" href="/dist/css/metisMenu.css">
    <link rel="stylesheet" href="/dist/css/owl.carousel.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- style css -->
    <link rel="stylesheet" href="/dist/css/typography.css">
    <link rel="stylesheet" href="/dist/css/default-css.css">
    <link rel="stylesheet" href="/dist/css/styles.css">
    <link rel="stylesheet" href="/dist/css/responsive.css">
    <!-- modernizr css -->
    <script src="/dist/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- error area start -->
    <div class="error-area ptb--100 text-center">
        <div class="container">
            <div class="error-content">
                <h2>404</h2>
                <p>Ooops!</p>
                <a href="/">Pagina Principal</a>
            </div>
        </div>
    </div>
    <!-- error area end -->

    <!-- jquery latest version -->
    <script src="/dist/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="/dist/js/popper.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/dist/js/owl.carousel.min.js"></script>
    <script src="/dist/js/metisMenu.min.js"></script>
    <script src="/dist/js/jquery.slimscroll.min.js"></script>
    <script src="/dist/js/jquery.slicknav.min.js"></script>
    <!-- others plugins -->
    <script src="/dist/js/plugins.js"></script>
    <script src="/dist/js/scripts.js"></script>
</body>

</html> --}}
