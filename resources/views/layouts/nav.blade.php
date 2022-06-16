<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('js/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('js/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('js/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
      

        <!-- Nav Bar Start -->
        
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <img src="{{asset('img/logo2.png')}}" height="90px" width="70px" alt="logo" style="margin:10px">
              
                <a class="nav-item nav-link" href="/">Home</a>
                
                        <a href="/About" class="nav-item nav-link">About</a>
                        <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                        <a href="/Contactus" class="nav-item nav-link">Contact</a>
                        <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                        <a href="request" class="nav-item nav-link">Apply</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                  
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a href="/home" class="nav-item nav-link" style="color:black">Account</a>
                                    <a href="/show_request" class="nav-item nav-link" style="color:black">Start</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    <!-- <a href="contact.html" class="nav-item nav-link">Account</a>
                        <a href="event.html" class="nav-item nav-link ">Volunteer</a>
                        <a href="event.html" class="nav-item nav-link">Login</a>
                       
                        <a href="contact.html" class="nav-item nav-link">Logout</a> -->
                    </div>
                </div>
            </div>
        </div>