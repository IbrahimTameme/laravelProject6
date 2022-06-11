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
                <img src="{{asset('img/logo2.png')}}" height="70px" width="60px" alt="logo" style="margin:10px">
                <a href="/ho" class="navbar-brand">AUNS</a>
                <a href="event.html" class="nav-item nav-link">Home</a>
                        <a href="event.html" class="nav-item nav-link">Events</a>
                        <a href="event.html" class="nav-item nav-link">About</a>
                        <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                  
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                    <a href="contact.html" class="nav-item nav-link">Account</a>
                        <a href="event.html" class="nav-item nav-link ">Volunteer</a>
                        <a href="event.html" class="nav-item nav-link">Login</a>
                       
                        <a href="contact.html" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </div>
        </div>