@extends('layouts.master')
@section('title', 'Reqeust order')
@section('contant')
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
.card
{
    margin-top:2%;
}
.topmargin
{
    height: 250px;
    width: 100%;
    background-color:#008E89;
}
    </style>
    <html>
<body>
    <div class="topmargin">
    </div>
<div class="container">
    <div class="row justify-content-center">
    
        
        <div class="row d-flex justify-content-around"> 
            
       @foreach($view2 as $data) 
    <div class="card" style="width: 25rem;">
        
        <img src="https://www.politico.com/dims4/default/cdf13cc/2147483647/strip/true/crop/1160x773+0+0/resize/630x420!/quality/90/?url=https%3A%2F%2Fstatic.politico.com%2F6e%2Fc0%2F4768455b43789942828ea3620e29%2F210818-larry-elder-ap-773.jpg" title="YouTube video player" >
        <div class="container"> 

        <div class="card-body">
          <h5 class="card-title">{{$data->elder_name}}</h5>
          <p class="card-text">{{$data->elder_age}}</p>
          <p class="card-text">{{$data->gender}}</p>
          <p class="card-text">{{$data->location}}</p>
          <p class="card-text">{{$data->elder_phone_number}}</p>
          <p class="card-text">{{$data->needed_services}}</p>
          <p class="card-text">{{$data->date}}</p>
        </div>
       
       
      </div>

    </div>
@endforeach
</body>
</html>
@endsection