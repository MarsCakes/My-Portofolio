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
    <script src="public\js\scripts.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Welcome to my Website!</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#portofolioSection">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#aboutSection">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="#footer">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('introduction')
    <main>
        @yield('aboutme')
        @yield('portofolio')
    </main>
    <footer id="footer" class="footer text-center">
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
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"
                        onclick="window.location.href='https://www.facebook.com/profile.php?id=100009966162002'">
                        <i class=" fa-brands fa-fw fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"
                        onclick="window.location.href='https://www.linkedin.com/in/imanuel-peter-phang-16abb9386/'">
                        <i class="fa-brands fa-fw fa-linkedin-in"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"
                        onclick="window.location.href='https://www.instagram.com/_sclaps_?igsh=eW5rcjEyYTM3Z2x5'">
                        <i class="fa-brands fa-fw fa-instagram"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Contact Me At:</h4>
                    <p class="lead mb-0">
                        Email: imanuel.peter2005@gmail.com <br>
                        Whatsapp: +62 851-5726-5595
                    </p>
                </div>
            </div>
        </div>
    </footer>
    @yield('footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>