<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In</title>
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <input id="email" placeholder="Email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                autocomplete="current-password">
                            <div class="text-danger">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember">
                                        {{ __('Stay signed in') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button type="submit" class=" btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="form-footer text-center mt-4">
                            <p><a href="/" style="color: #454d55 ">Pagina Principal</a></p>
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
