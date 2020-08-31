<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Etech</title>

    <style>
.menu
{
background-color:red;
  width="20%";
}
.card_body
{
  border-radius: 50px;
}


    </style>
<body class="bg-light">

@extends('layouts.app')

@section('content')

<div class="container-fluid d-flex  ">
<div class="container col-1 d-flex flex-column flex-wrap ">
<a href=""><h5 class="fas fa-home">DashBoard</h5></a><br>
<a href="{{route('add_course')}}" class="btn btn-danger my-1" type="submit">Add Courses</button></a>
<button class="btn btn-primary my-1" type="submit">Add Student</button>
<button class="btn btn-success my-1" type="submit">Add Expenses</button>
<button class="btn btn-info my-1" type="submit">Add Earning</button>
<!-- <button class="btn btn-info my-1" type="submit">Add Earning</button> -->

</div>


<div class="container d-flex justify-content-around align-self-start  flex-wrap">

<div class="card bg-danger shadow card_body m-2" style="width: 18rem;">

  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title text-white">Total Courses <i class="fas fa-user-graduate"></i></h5>
 
    <p class="card-text display-4 text-white">{{$total}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item bg-danger shadow text-white">Top Course
  </ul>

</div>
<div class="card bg-primary shadow card_body m-2" style="width: 18rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title text-white">Total Students <i class="fas fa-user-graduate"></i></h5>
    <p class="card-text display-4  text-white">15000</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item bg-primary shadow text-white">Increased by 60%
  </ul>

</div>
<div class="card bg-success shadow card_body m-2" style="width: 18rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title text-white">Total Expenses <i class="fas fa-hand-holding-usd"></i></h5>
    <p class="card-text display-4 text-white">15000</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item bg-success shadow text-white">Increased by 60%
  </ul>

</div>
<div class="card bg-info shadow card_body m-2" style="width: 18rem;border-radius:15px; overflow:hidden;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title text-white">Total Earning <i class="fas fa-funnel-dollar"></i></h5>
    <p class="card-text display-4  text-white">15000</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item bg-info  shadow text-white">Increased by 60%
  </ul>

</div>
</div>
</div>
<div class="container-fluid col-12 d-flex justify-content-end ">
<div class="container col-4 d-flex border-primary">

</div>

<div class="container col-8 d-flex flex-wrap mr-3 border border-primary">

<table class="table table-striped ">
<h1 class="text-primary text-center">Recent Students Information</h1>
<div class="form-group">
<input class="form-control " id="myInput" type="text" placeholder="Search Student Information..">
</div>
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Joining Date</th>
      <th scope="col">Fee Status</th>
      <th scope="col">Remaining</th>

    </tr>
  </thead>
  <tbody  id="myTable">
    <tr>
      <th scope="row">1</th>
      <td>Hamza</td>
      <td>Asad</td>
      <td>03-11-2020</td>
      <td class="text-danger">paid</td>
      <td>5000</td>

    </tr>
  </tbody>
</table>
</div>
<!-- <div class="container col-4 d-flex  flex-wrap border border-success m-2">

<table class="table table-striped">
<h1 class="text-success text-center">Recent Expense Information</h1>
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Expense Type</th>
      <th scope="col">Data</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Food</td>
      <td>23-12-2020</td>
      <td>260</td>
      <td>For Party</td>

    </tr>
  </tbody>
</table>
</div> -->
</div>
</div>
</div>
<div class="container-fluid col-12 d-flex justify-content-end">
<div class="container col-4 d-flex border-primary">

</div>

<div class="container col-4 d-flex flex-wrap m-2 border border-info">

<table class="table table-striped ">
<h1 class="text-info text-center">Recent Income Information</h1>
<div class="col-6 d-flex align-items-center ">
<input class="form-control " id="myInput" type="text" placeholder="Search Income Information..">
</div>
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Income Type</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th> 
      <td>Fee</td>
      <td>03-11-2020</td>

      <td>5000</td>
      <td>Course Fee</td>

    </tr>
  </tbody>
</table>
</div>
<div class="container col-4 d-flex  flex-wrap border border-success m-2">

<table class="table table-striped">
<h1 class="text-success text-center">Recent Expense Information</h1>
<div class="col-4 d-flex align-items-center ">
<input class="form-control " id="myInput" type="text" placeholder="Search Expense..">
</div>
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Expense Type</th>
      <th scope="col">Data</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Food</td>
      <td>23-12-2020</td>
      <td>260</td>
      <td>For Party</td>

    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
<div class="card text-center mt-5">
  <div class="card-header">
    <!-- <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul> -->
  </div>
  <div class="card-body">
    <h5 class="card-title">E-tech Academy of Information technology</h5>
    <p class="card-text">Railway Road Near Railway station Lalamusa </p>
    <p class="card-text">0309-4760153 | 0346-6575338 </p>

    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
@endsection
</head>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<body>