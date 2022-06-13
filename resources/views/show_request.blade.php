@extends('layouts.master')
@section('title', 'Reqeust order')
@section('contant')



<style>


button:hover, a:hover {
  opacity: 0.7;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #008E89;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

img {
    vertical-align: middle;
    border-style: none;
    margin: 20px

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



<div class="container p-5">
    <div class="d-flex flex-row justify-content-around flex-wrap">
  @foreach($view2 as $data) 
  <div class="card mt-5">
        

        <div class="mt-5">
            <div>
                <div style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><img src="https://www.manufacturingusa.com/sites/manufacturingusa.com/files/default.png" width="300px"></div>
            </div>
            
            <div class="mt-3"style="text-align:center"> Name :{{$data->name}}</div>
            <div class="mt-3"style="text-align:center"> Age :{{$data->age}}</div>
            <div class="mt-3"style="text-align:center">Gender :{{$data->gender}}</div>
            <div class="mt-3"style="text-align:center">Location :{{$data->location}}</div>
            <div class="mt-3"style="text-align:center">Phone :{{$data->phone_num}}</div>
            <div class="mt-3"style="text-align:center">Needed_Services :{{$data->needed_services}}</div>
            <div class="mt-3"style="text-align:center">Time_Needed :{{$data->    time_needed}}</div>

        </div>
        <a href="accept_request/id/{{Auth::user()->id}}/{{$data->elder_id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Accept</a>
        </div>
</div>


@endforeach

</div>
</div>
</div>
@endsection