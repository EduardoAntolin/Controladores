
@section("titulo","Inicio")
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>El chismoso | @yield('titulo')</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
   </head>
<body>
    <!-- Brand Start -->
    <div class="brand">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4">
                    <div class="b-logo">
                        <a href="/">
                            <img src="img/logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->
    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="/" class="nav-item nav-link active">Inicio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Sub Item 1</a>
                                <a href="#" class="dropdown-item">Sub Item 2</a>
                            </div>
                        </div>
                        <a href="single-page.html" class="nav-item nav-link">Tecnologia</a>
                        <a href="contact.html" class="nav-item nav-link">Contacto</a>
                    </div>
                    <div class="social ml-auto">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    <!-- index -->
    <div class="tab-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#featured">Noticias nuevas</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="featured" class="container tab-pane active">
                            <div class="col-md-12">
                                <div class="tn-news">
                                    <div class="post-media">
                                        @foreach($noticias as $noticia)
                                        <a href="{{route("noticias.detalles",$noticia->id)}}" title="">
                                            @if($noticia->foto != NULL)
                                            <img src="{{$noticia->foto}}" style="width: 800px; height: auto;" alt="" class="img-fluid">
                                            @else
                                            <img src="img/logo.png" style="width: 800px; height: auto;" alt="" class="img-fluid">
                                            @endif
                                        </a>
                                @endforeach
                                    </div>
                                    <div class="blog-meta big-meta col-md-11">
                                        @foreach($noticias as $noticia)
                                        <h4><a href="{{route("noticias.detalles",$noticia->id)}}" title="">{{ $noticia->titulo }}</a></h4>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>