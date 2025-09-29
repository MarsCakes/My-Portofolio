<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Website Pribadi')</title>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">MyWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id=navbarNav>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">About us</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('introduction')
    <main>
        @yield('portofolio')
    </main>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Jakarta Barat
                        <br />
                        Kalideres
                    </p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">You can find me at:</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fa-brands fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fa-brands fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i
                            class="fa-brands fa-fw fa-instagram"></i></a>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    @yield('footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>