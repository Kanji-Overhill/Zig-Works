<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Zig Works</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Required Core Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/glide.core.min.css') }}">

    <!-- Optional Theme Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/glide.theme.min.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab58011517.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ url('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="position-fixed" style="z-index: 99;">
           <div class="container-fluid">
               <div class="row justify-content-between">
                   <div class="col-md-3 pl-0 pr-0 logo-content">
                       <img src="{{url('images/ZW_WHITE.png')}}" alt="" class="img-fluid logo">
                       <div class="triangulo-left"></div>
                   </div>
                   <div class="col-md-8 d-flex align-items-center justify-content-end">
                        <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#!">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!">How it works</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!">Events</a>
                                </li>
                                <li class="nav-item login-link">
                                    <a class="nav-link" href="#!">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!">Sign Up</a>
                                </li>
                            </ul>
                          </div>
                        </nav>
                   </div>
               </div>
           </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            
        </footer>
    </div>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @if(Route::is('events') )
    <script src="{{ url('js/glide.min.js') }}"></script>
    <script>
        new Glide('.slider-1').mount();
    </script>
    @endif
    <script src="{{ url('js/main.js') }}"></script>
</html>
