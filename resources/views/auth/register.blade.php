<style>


    .card-header:first-child {
        color: white;
        background:#008E89;
    
    }
    button.btn.btn-primary {
color: #fff;
border-color:#008E89;
background: #008E89;
    
}

div.card{
    color: #008E89;
}



    </style>






@extends('layouts.master')
@section('contant')
   <!-- Page Header Start -->
   <div class="page-header"style="background-color: #008E89; padding: 90px 0 40px 0;"  >
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <h2>Register</h2>
                </div>
                <div class="col-12">
                    <a>Register</a>
                </div>
            </div>
    </div>
    </div>
    <!-- Page Header End -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="first name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                          
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                          
                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('name') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                     

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="floatingSelect" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                          
                            <div class="col-md-6">
                                <select class="form-select form-control  " name="gender" id="floatingSelect" aria-label="Floating label select example" value="{{ old('gender') }}">
                                    <option selected value="" >Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>
                                
                            </div>
                        </div> 
             
                     <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>
                          
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('age') is-invalid @enderror" name="age" id="bday" value="{{ old('age') }}">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 



                        
                     <div class="row mb-3">
                            <label for="front_id_pic" class="col-md-4 col-form-label text-md-end">{{ __('Front_Id_Pic') }}</label>
                        <div class="col-md-6">
                                <input type="file" class="form-control " name="front_id_pic" id="front_id_pic" value="{{ old('front_id_pic') }}">

                            </div>
                        </div> 


                        <div class="row mb-3">
                            <label for="back_id_pic" class="col-md-4 col-form-label text-md-end">{{ __('Back_Id_Pic') }}</label>
                        <div class="col-md-6">
                                <input type="file" class="form-control " name="back_id_pic" id="back_id_pic" value="{{ old('back_id_pic') }}">

                            </div>
                        </div> 

                        <div class="row mb-3">
                            <label for="needed_services" class="col-md-4 col-form-label text-md-end">{{ __('service') }}</label>
                        <div class="col-md-6">
                                  <select  name="needed_services" id="needed_services" aria-label="Floating label select example" required value="{{ old('needed_services') }}">
                                        <option selected value="" >service</option>
                                        <option value="Cleaning">Cleaning</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Provide_needs">Provide_needs</option>
                                        <option value="Personal_hygiene">Personal_hygiene</option> 
                                        <option value="Personal_check">Personal_check</option>
                                      </select>
                            </div>
                        </div> 


                        <div class="row mb-3">
                            <label for="time" class="col-md-4 col-form-label text-md-end">{{ __('Time From') }}</label>
                        <div class="col-md-6">
                                <input type="datetime-local" class="form-control " name="time" id="time" value="{{ old('time') }}">

                            </div>
                        </div> 




                        <div class="row mb-3">
                            <label for="timeTo" class="col-md-4 col-form-label text-md-end">{{ __('Time To') }}</label>
                        <div class="col-md-6">
                                <input type="datetime-local" class="form-control " name="timeTo" id="timeTo" value="{{ old('timeTo') }}">

                            </div>
                        </div> 


                        <div class="row mb-3">
                            <label for="car" class="col-md-4 col-form-label text-md-end">{{ __('Car') }}</label>
                        <div class="col-md-6">
                        <select class="form-select form-control" name="car" id="car" value="{{ old('car') }}">
                                <option selected value="" >Car</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>

                            </div>
                        </div> 




                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
