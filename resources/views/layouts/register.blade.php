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






@extends('layouts.app')
@section('title, register')


@section('content')
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
                                <input id=" name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3">
                            <label for="last name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>
                          
                            <div class="col-md-6">
                                <input id=" name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="floatingSelect" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                          
                            <div class="col-md-6">
                                <select class="form-select form-control  @error('gender') is-invalid @enderror" name="gender" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected value="" >Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>
                                  @error('gender')
                                  <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
             
                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age') }}</label>
                          
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="bday" id="bday">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <label for="front_id_pic" class="col-md-4 col-form-label text-md-end">{{ __('Front_id_pic') }}</label>
                            <div class="col-md-6">
                            <input type="file" name="image" class="form-control" placeholder="Image">
                        
                            @if ($errors->has('image'))
                        
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                        
                            @endif
                        
                        </div>
                    </div>

                    <div class="row mb-3">

                        <label for="back_id_pic" class="col-md-4 col-form-label text-md-end">{{ __('Back_id_pic') }}</label>
                        <div class="col-md-6">
                        <input type="file" name="image" class="form-control" placeholder="Image">
                    
                        @if ($errors->has('image'))
                    
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                    
                        @endif
                    
                    </div>
                    </div>


                    <div class="row mb-3">
                        <label for="time" class="col-md-4 col-form-label text-md-end">{{ __('Time') }}</label>
                    <div class="col-md-6">
                    <input type="time" id="time" name="time"
                           min="09:00" max="18:00" required>
                    </div>
                    </div>

                   
                     
                    <div class="row mb-3">
                        <label for="floatingSelect" class="col-md-4 col-form-label text-md-end">{{ __('Car') }}</label>
                      
                        <div class="col-md-6">
                            <select class="form-select form-control  @error('car') is-invalid @enderror" name="car" id="floatingSelect" aria-label="Floating label select example">
                                <option selected value="" >Car</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                              @error('car')
                              <div class="invalid-feedback">{{$message}}</div>
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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
