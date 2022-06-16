@extends('layouts.master')
@section('contant')
<body>

    
    <!-- Page Header Start -->
    <div class="page-header"style="background-color: #008E89; padding: 90px 0 40px 0;"  >
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <h2>Aboutus</h2>
                </div>
                <div class="col-12">
                    <a>Aboutus</a>
                </div>
            </div>
    </div>
    </div>
    <!-- Page Header End -->
    

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="https://images.ctfassets.net/y2ejbwhh6xss/7ewDetsedc420dX4yPq83X/2b60953d53002feddb55bf306bd1cbed/elderly-care.jpg?w=1200&q=100"></div>
                </div>
                <div class="col-lg-6"  style="margin-top:-5%">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Worldwide non-profit charity organization</h2>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                            AUNS is a non-profit charitable organization.
                            We focus on the elderly category who do not have people to take care of them and help them to spend their daily routine, make life easier for them and become more beautiful.
                            And we will train volunteers for a week on how to deal with the elderly because they are a sensitive group by experts specialized in this field .
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                Making the world a better place to live in is a divine mission. And that’s what We are doing every day. We want to build healthy communities by spreading the word for a cause and reaching people who are willing to help from all around the globe. AUNS is one of the best tools help elder to live in peace .
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                
                            We created auns so that we can provide all services to the elderly who we cannot see in pain alone, we want to find a family for each one of them, and this will happen because of your help us in finding their needs and helping them.
                            We seek a world of hope, tolerance and social justice, where suffering has been overcome and people live in dignity and security.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    
    
    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
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


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Meet Our Team</p>
                <h2>Awesome guys behind our charity activities</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="/img/Roaa.jpg" alt="Team Image" width="10%">
                        </div>
                        <div class="team-text">
                            <h2>Roa'a Yaseen</h2>
                            <p>Founder & CEO</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/ro-a-yaseen-58076696/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/roayas/laravelProject6"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="/img/samar.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Samar Alkhamis</h2>
                            <p>Chef Executive</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/samar-alkhamis-942a92151"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/samaralkhamis/laravelProject6"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="/img/ebrahem1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Ebrahem Tamimi</h2>
                            <p>Chef Advisor</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/ibrahim-tameme-52433a209/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/IbrahimTameme/laravelProject6"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="/img/gufran11.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Ghofran Almomani</h2>
                            <p>Advisor</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/ghufran-almomani-777b93232/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://github.com/ghufranalmomani/laravelproject6"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    
    
    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>Testimonial</p>
                <h2>What people are talking about our charity activities</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/000/211/023/small/CUSTOMER_SERVICE_CHARACTER.jpg" alt="Image">
                        <div class="testimonial-name">
                            <h3>Person Name</h3>
                            <p>Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="img/testimonial-2.jpg" alt="Image">
                        <div class="testimonial-name">
                            <h3>Person Name</h3>
                            <p>Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="img/testimonial-3.jpg" alt="Image">
                        <div class="testimonial-name">
                            <h3>Person Name</h3>
                            <p>Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-profile">
                        <img src="img/testimonial-4.jpg" alt="Image">
                        <div class="testimonial-name">
                            <h3>Person Name</h3>
                            <p>Profession</p>
                        </div>
                    </div>
                    <div class="testimonial-text">
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection