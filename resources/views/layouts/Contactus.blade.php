@extends('layouts.master')
@section('contant')

<!-- Page Header Start -->
<div class="page-header"style="background-color: #008E89; padding: 90px 0 40px 0;"  >
    <div class="container" >
        <div class="row">
            <div class="col-12">
                <h2>Contactus</h2>
            </div>
            <div class="col-12">
                <a>Contactus</a>
            </div>
        </div>
</div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Get In Touch</p>
        </div>
        <div class="contact-img">
            <img src="https://www.ciquk.org/wp-content/uploads/2017/09/W7-DIPLOMA-IN-ELDERLY-CARE.jpg" alt="Image">
        </div>
        <div class="contact-form">
                <div id="success"></div>
                <form action="/contacts" method="post"  name="sentMessage" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="control-group">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea name="message" class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
    </div>
</div>
<!-- Contact End -->
<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title">
                    <h3 style="text-align:center;">Contact detail</h3>
                </div><br>
                <div class="content">
                    <!-- Info-1 -->
                    <div class="info" style="margin-left:70px">
                        <i style="color:#008E89" class="fas fa-mobile-alt"></i>
                        <h4 class="d-inline-block" style="color:#008E89" >Call Us :</h4>
                            <br>
                            <p>+12457836913 , +12457836913</p>
                    </div><br>
                    <!-- Info-2 -->
                    <div class="info" style="margin-left:70px">
                        <i style="color:#008E89" class="far fa-envelope"></i>
                        <h4 class="d-inline-block" style="color:#008E89">Email Us :</h4>
                            <br>
                            <p> AUNS@gmail.com</p>
                    </div><br>
                    <!-- Info-3 -->
                    <div class="info" style="margin-left:70px">
                        <i style="color:#008E89" class="fas fa-map-marker-alt"></i>
                        <h4 class="d-inline-block" style="color:#008E89">Address :<br></h4>
                            <p>6743 last street , Abcd, Xyz</p>
                    </div>
                </div>
            </div>

        <!--------------------- map section ----------------------->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13882.352531894103!2d35.0057587!3d29.557486499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sjo!4v1652880476038!5m2!1sen!2sjo" width="200%" height="350px" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> 
    </div>
</section>

@endsection