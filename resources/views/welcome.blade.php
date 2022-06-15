@extends('layouts.master')
@section('title', 'Home')
@section('contant')


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Let's be kind for <br> elderly with AUNS</h1> <br><br>
                           
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="/login">Volunteer Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/HLGzMgQrlWs" data-target="#videoModal">Watch Video</a><br>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('img/carousel-2.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Get Involved with a helping hand with AUNS</h1> <br><br>
                           
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="/login">Volunteer  Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/HLGzMgQrlWs" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Bringing smiles to others with AUNS</h1> <br><br>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="/login">Volunteer  Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/HLGzMgQrlWs" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="{{asset('img/IMG_8848.jpg')}}"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Worldwide non-profit charity organization</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li> -->
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                AUNS is a non-profit charitable organization. We focus on the elderly category who do not have people to take care of them and help them to spend their daily routine, make life easier for them and become more beautiful. And we will train volunteers for a week on how to deal with the elderly because they are a sensitive group by experts specialized in this field 
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>We believe that we can make a difference in elderly life with you</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                            <i class="fa-solid fa-carrot"></i>
                            </div>
                            <div class="service-text">
                                <h3>Healthy Food</h3>
                                <p>We make sure that the provision of healthy food and  appropriate for the needs of the elderly and their age and that they get their meals on time</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                            <i class="fa-solid fa-car-rear"></i>
                            </div>
                            <div class="service-text">
                                <h3>Access Care </h3>
                                <p>We make sure that the elderly person has access to his daily and life needs (groceries, clothes, etc.) and if he cannot reach them himself, we bring them to him</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                               <i class="fa-solid fa-hand-holding-medical"></i>
                            </div>
                            <div class="service-text">
                                <h3>Health Care</h3>
                                <p>We make sure that the elderly receives appropriate health care and that his medications are available to him in case he needs them and that he takes them on time and visits his doctor constantly</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                            <i class="fa-solid fa-pump-soap"></i>
                            </div>
                            <div class="service-text">
                                <h3>Personal Hygiene Care</h3>
                                <p>We make sure that the elderly are taken care of in terms of personal hygiene and we help with that</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                            <i class="fa-solid fa-spray-can-sparkles"></i>
                            </div>
                            <div class="service-text">
                                <h3>Clean Environment</h3>
                                <p>We ensure the cleanliness of the environment in which the elderly live and carry out their daily activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                            <i class="fa-solid fa-heart"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p>We make sure that seniors connect with the community around them and can communicate with their loved ones and participate in regular social activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center" >
                      
                    <a class="btn btn-custom btn-play "  href="/login" >Apply For our Serves</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="{{asset('img/facts.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
     
       
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/event-1.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>01-Jan-45</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>New York</p>
                                </div>
                                <div class="event-text">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                    </p>
                                    <a class="btn btn-custom" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/event-2.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>01-Jan-45</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>New York</p>
                                </div>
                                <div class="event-text">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                    </p>
                                    <a class="btn btn-custom" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->


       
        @endsection