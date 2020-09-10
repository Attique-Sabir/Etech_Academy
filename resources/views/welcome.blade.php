<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
@extends('bs4CDN')
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
         
            .card img {
              width: 1800px;
              height: 200px;
            }
       
        </style>
    </head>
    <body>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sample </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
      </li>
      <li class="nav-item">

        <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
      </li>
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

</nav>

</div>
  
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-50" src="{{'images/etech.jpg'}}" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Learn</h5>
    <p>All Kinf of Learning</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-25" src="{{'images/etech2.png'}}" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Learn</h5>
    <p>All Kinf of Learning</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-25" src="{{'images/etech3.png'}}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Learn</h5>
    <p>All Kinf of Learning</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h1 class="text-white text-center bg-dark">We Provide All Kind of Courses</h1>

<div class="container-fluid d-flex">
<div class="row">
  @foreach ($all_courses as $course)

  <div class="col-3">

    <div class="container-fluid d-flex p-3 justify-content-center flex-wrap border border-primary" id="card">
      <div class="card-deck h-100">
        <div class="card">
          <img class="card-img-top img-thumbnail"src="{{asset('images/'.$course->course_image)}}"   alt="Card image cap">
          <div class="card-body bg-light ">
            <h5 class="card-title ">{{$course->course_name}}</h5>
            <div class="img bg-light">
              <div class="row">
                <div class="col">
           <img src="{{asset('images/'.$course->course_image)}}" class="rounded-circle" style="width:30%;height:110%" alt="Card image cap">
                </div>
                <div class="col">
            <h6 class="card-text d-flex text-primary justify-content-center">Fee:{{$course->course_fee}}</h6>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <img class=" thumbnail d-flex flex-wrap "style="image:width:200px;height:108px;" src="{{asset('images/'.$course->course_image)}}" >
    <h4>{{$course->course_name}}</h4>
    <p>{{$course->course_duration}}</p>
    <p>{{$course->course_fee}}</p> --}}

  </div>
@endforeach

</div>

</div>
{{-- <table class="table">
  <thead>
    <tr>
      <th scope="col">iamge</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Duration</th>
      <th scope="col">Course Fee</th>
    </tr>
  </thead>
  <tbody>
    <tr>
          
    <th scope="row"><img class=" thumbnail"style="image:width:100px;height:48px;" src="{{asset('images/'.$course->course_image)}}" ></th>
      <td>{{$course->course_name}}</td>
      <td>{{$course->course_duration}}</td>
      <td>{{$course->course_fee}}</td>

    </tr>
    @endforeach
    
  </tbody>
</table> --}}
    </body>
</html>
