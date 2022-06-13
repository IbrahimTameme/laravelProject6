@extends('layouts.master')
@section('title', 'User Page')
@section('contant')
<style>
  .no_active
  {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    height: 300px;
    width: 100%;
   text-align: center;
  }
  .no_active .btn
  {
    
    display: inline;
    /* margin-left: 35%; */
  }
  .text_no_active
  {
    font-size: 3rem;
    color: black;
    margin: 5%;

  }
  .active_vol_header
  {
    text-align: center;
    font-weight: bold;
  }

  #editPic{
    display: none;
}
.cont{
    width: 60%;
}
.butt{
    background-color: rgb(245, 245, 220,0);
    border: none;
}
#use{
    display: none;
}
  </style>
<div class="page-header"style="background-color: #008E89; padding: 90px 0 40px 0;"  >
            <div class="container" >
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Volunteer Page</a>
                    </div>
                </div>
</div>
</div>
<div class="container ">
    <div class="main-body">
    
        
    

         
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="img/{{  Auth::user()->img }}" alt="Admin" class="rounded-circle" height="150" width="150">
                <a href="/addItem"> edit</a>
                
                <div class="mt-3">
                  <h4>{{  Auth::user()->name}}</h4>
                  <div class="row d-flx">
                  <form action="/added" method="post" enctype="multipart/form-data" id="editPic">
                        @csrf
                        <input type="file" name="img" required style="font-size:small;">
                        <input type="submit" name="addItem" value="edit" style="font-size:small;">
                  </form>

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/{{  Auth::user()->img }}" alt="Admin" class="rounded-circle" width="150">
                    <a href="/addItem"> edit</a>
                    
                    <div class="mt-3">
                      <h4>{{  Auth::user()->name}}</h4>
                      <div class="row d-flx">
                      <form action="/added" method="post" enctype="multipart/form-data" id="editPic">
                            @csrf
                            <input type="file" name="img" required style="font-size:small;">
                            <input type="submit" name="addItem" value="edit" style="font-size:small;">
                      </form>
                      </div>
                      <button type="subimt" onclick="show()" class="butt"><i class="fa-solid fa-pen-to-square" id ="ed"></i></button>
                     
                      <a href=""></a>
                      
                    </div>

                  </div>
                  <button type="subimt" onclick="show()" class="butt"><i class="fa-solid fa-pen-to-square" id ="ed"></i></button>
                 
                  <a href=""></a>
                  
                </div>
              </div>


            
              <div class="card mt-3" id="use1">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Full Name</h6>
                    <span class="text-secondary">{{  Auth::user()->name}}</span><span class="text-secondary">{{  Auth::user()->lname}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Email</h6>
                    <span class="text-secondary">{{  Auth::user()->email}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Phone</h6>
                    <span class="text-secondary">{{  Auth::user()->phone}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Age</h6>
                    <span class="text-secondary">{{  Auth::user()->age}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Gender</h6>
                    <span class="text-secondary">{{  Auth::user()->gender}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info" onclick="show1()" >Edit</button>
                    </div>
                  </li>
                </ul>
              </div>
              <!--  -->
              <form  method="post" action="{{url('/updateuser')}}" id='use'>
                @csrf
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">First Name</h6>
                    <input type="text" name="name" value="{{  Auth::user()->name}}">
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">last Name</h6>
                    <input type="text" name="lname" value="{{  Auth::user()->lname}}">
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Email</h6>
                  <input type="text" name="email" value="{{  Auth::user()->email}}">
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Phone</h6>
                  <input type="text" name="phone" value="{{  Auth::user()->phone}}">
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Age</h6>
                  <input type="date" name="age" value="{{  Auth::user()->age}}">
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Gender</h6>
                  <select  name="gender" id="floatingSelect" aria-label="Floating label select example" required>
                                    <option selected value="" >Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <div class="row">
                    <div class="col-sm-12">
                     
                      <button class="btn btn-info" type="submit"> edit</button>
                    </div>
                  </li>
                </ul>
              </div>
              </form>
              <!--  -->

            </div>
          </div>
        
          <div class="card mt-3" id="use1">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">Full Name</h6>
                <span class="text-secondary">{{  Auth::user()->name}}</span><span class="text-secondary">{{  Auth::user()->lname}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Email</h6>
                <span class="text-secondary">{{  Auth::user()->email}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Phone</h6>
                <span class="text-secondary">{{  Auth::user()->phone}}</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <div class="row">
                <div class="col-sm-12">
                  <button class="btn btn-info" onclick="show1()" >Edit</button>
                </div>
              </li>
            </ul>
          </div>
          <!--  -->
          <form  method="post" action="{{url('/updateuser')}}" id='use'>
            @csrf
          <div class="card mt-3">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">First Name</h6>
                <input type="text" name="name" value="{{  Auth::user()->name}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">last Name</h6>
                <input type="text" name="lname" value="{{  Auth::user()->lname}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Email</h6>
              <input type="text" name="email" value="{{  Auth::user()->email}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">Phone</h6>
              <input type="text" name="phone" value="{{  Auth::user()->phone}}">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <div class="row">
                <div class="col-sm-12">
                 
                  <button class="btn btn-info" type="submit"> edit</button>
                </div>
              </li>
            </ul>
          </div>
          </form>
        </div>
            @if (isset($data))
                
           
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="card-header active_vol_header">
                    Your active Volunteer
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$data->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$data->age}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$data->phone_num}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Needed services</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$data->needed_services}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$data->location}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="delete_job/id/{{Auth::user()->id}}">delete job</a>
                    </div>
                  </div>
                </div>
              </div>            
              @else
              <div class="col-md-8">
              <div class="card ">
                
                <div class="card-body no_active">
                  <h5 class="card-title text_no_active">no active jobs</h5>
                  
                  <a class="btn btn-info " target="__blank" href="show_request">Look for an opportunity </a>
                </div>
                </div>
              </div>


              {{-- <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body no_active">
                     <p class="text_no_active">no active jobs</p>
                    <div class="row ">
                 
                  <a class="btn btn-info " target="__blank" href="show_request">Look for an opportunity </a>

                    </div>
                  </div>
                </div>
              </div> --}}
              @endif
          
           
            
           
         



             
              



            </div>
          </div>

        </div>
    </div>

    <script>
      function show(){
        document.getElementById('editPic').style.display="block";
        document.getElementById('ed').style.display="none";
      }
      function show1(){
        document.getElementById('use').style.display="block";
        document.getElementById('use1').style.display="none";
      }
    </script>
    @endsection