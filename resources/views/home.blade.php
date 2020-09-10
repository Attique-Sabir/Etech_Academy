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
<!-- The Modal -->

<div class="container-fluid d-flex  ">
<div class="container col-1 d-flex flex-column flex-wrap ">
<a href=""><h5 class="fas fa-home">DashBoard</h5></a><br>
<a href="{{route('add_courses')}}" class="btn btn-primary my-1" type="submit">Add Courses</button></a>
<a href="{{route('add_students')}}" class="btn btn-danger my-1" type="submit">Add Student</button></a>
<a href="{{route('add_expense')}}" class="btn btn-success my-1" type="submit">Add Expenses</button></a>

<button class="btn btn-info my-1" type="submit">Add Earning</button>
<!-- <button class="btn btn-info my-1" type="submit">Add Earning</button> -->

</div>


<div class="container d-flex justify-content-around align-self-start col-8 flex-wrap">

<div class="card bg-primary shadow card_body m-2" style="width: 18rem;">

  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title text-white">Total Courses <i class="fas fa-award"></i></h5>
 
    <p class="card-text display-4 text-white text-center">{{$total_courses}}</p>
  </div>
  <ul class="list-group list-group-flush">
  
    <li class="list-group-item bg-primary shadow text-white"><a href="{{route('all_courses')}}" class="btn btn-primary text-white">Click here to See More</a>
   
  </ul>

</div>
<div class="card bg-danger shadow card_body m-2" style="width: 18rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    <h5 class="card-title text-white">Total Students <i class="fas fa-user-graduate"></i></h5>
    <p class="card-text display-4  text-white text-center">{{$total}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item bg-danger shadow text-white"><a href="" class="btn btn-danger text-white">Click here to See More</a>
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

<div class="container col-9 d-flex flex-wrap mr-5 border border-primary">



<h1 class="text-primary text-center col-10 mt-2">Recent Students Information</h1>
<div class="form-group">
<input class="form-control mr-sm-2 input-lg mt-3" id="myInput" type="search" placeholder="Search Student Info">

</div>

<hr>
<table class="table table-striped " width="100%">

  <thead class="bg-dark text-white">
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">Image</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Joining Date</th>
      <th scope="col">Fee Status</th>
      <th scope="col">Remaining</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Full Info</th>

    </tr>

  </thead>
  <tbody  id="myTable">



    <tr>
  @foreach($allstd as $onerec)

      <td>{{$onerec->id}}</td>
      <td>
      @if(!empty($onerec->image))
      
      <img src="{{asset('images/'.$onerec->image)}}" class="img-thumbnail" style="image:width:100px;height:48px;"/>
      @else
      {{'No Image'}}
      @endif
      </td>
      <td>{{$onerec->student_name}}</td>
      <td>{{$onerec->father_name}}</td>
      <td>{{$onerec->joining_date}}</td>
      <td>{{$onerec->paid_fee}}</td>
      <td>{{$onerec->remaining_fee}}</td>
      <td>
      <a href="{{route('edit' , $onerec->id)}}"  class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$onerec->id}}">
  Edit
</a>
<div class="modal" data-keyboard="false" data-backdrop="static"" id="myModal{{$onerec->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Student Record</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">

      <form action="{{route('update', $onerec->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')

  <div class="form-group">
    <label for="student_name">student_name</label>

    <input type="text" class="form-control" name="student_name" id="student_name" value="{{$onerec->student_name}}" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="father_name">father_name</label>
    <input type="text" class="form-control" name="father_name" id="father_name"  value="{{$onerec->father_name}}"  placeholder="father_name">
  </div>
  <div class="form-group">
    <label for="age">Age</label>
    
    <input type="text" class="form-control" name="age"placeholder="Enter age" value="{{$onerec->age}}">
    @error('age')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group">
    <label for="mobile_no">Mobile #</label>
    <input type="text" class="form-control" name="mobile_no"placeholder="Enter mobile_no" value="{{$onerec->mobile_no}}" >
    @error('mobile_no')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group">
    <label for="gender">Gender</label>
    <div class="form-check-inline">
 
    @if($onerec->gender == 'Male' )
    <input type="radio" class="form-check-input" value="{{$onerec->gender}}"  checked="true"  name="gender">Male
    <input type="radio" class="form-check-input" value="{{$onerec->gender}}"   name="gender">Female
  @else
  <input type="radio" class="form-check-input" value="{{$onerec->gender}}"   name="gender">Male
  <input type="radio" class="form-check-input" value="{{$onerec->gender}}"  checked="true" name="gender">Female
  @endif
  
@error('optradio')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" rows="3" >{{$onerec->address}}</textarea>
    @error('address')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<h1 class="text-center bg-info text-white">Course info</h1>


  <div class="form-group ">
    <label for="course_name">Course Name</label>
    <input type="text" class="form-control" name="course_name"placeholder="Enter course_name" value="{{$onerec->course_name}}">
    @error('course_name')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group">
    <label for="course_duration">Course Duration</label>
    <input type="text" class="form-control" name="course_duration"placeholder="Enter course_duration" value="{{$onerec->course_duration}}">
    @error('course_duration')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group ">
    <label for="course_fee">Course Fee</label>
    <input type="text" class="form-control" name="course_fee"placeholder="Enter course_fee" value="{{$onerec->course_fee}}">
    @error('course_fee')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group ">
    <label for="joining_date">joining Date</label>
    <input type="text" class="form-control" name="joining_date"placeholder="Enter joining_date" value="{{$onerec->joining_date}}">
    @error('joining_date')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group ">
    <label for="ending_date">Ending Date</label>
    <input type="text" class="form-control" name="ending_date"placeholder="Enter ending_date" value="{{$onerec->ending_date}}">
    @error('ending_date')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group ">
    <label for="discount_fee">Discount Fee</label>
    <input type="text" class="form-control" name="discount_fee"placeholder="Enter discount_fee" value="{{$onerec->discount_fee}}">
    @error('discount_fee')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
 <div class="form-group ">
    <label for="paid_fee">Paid Fee</label>
    <input type="text" class="form-control" name="paid_fee"placeholder="Enter paid_fee" value="{{$onerec->paid_fee}}">
    @error('paid_fee')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group ">
    <label for="remaining_fee">Remaining Fee</label>
    <input type="text" class="form-control" name="remaining_fee"placeholder="Enter remaining_fee" value="{{$onerec->remaining_fee}}">
    @error('remaining_fee')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="form-group ">
<img src="{{asset('images/'.$onerec->image)}}" class="img-thumbnail" style="image:width:100px;height:48px;"/>
    <label for="image">image</label>
    <input type="file" class="form-control" name="image" placeholder="{{$onerec->image}}" value="{{$onerec->image}}">
    @error('image')
<p class="text-danger">{{$message}}</p>
@enderror
</div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</td>

    {{-- <td> --}}
        {{--(It will not reload the page) For reloading the page faster --}}
    {{-- it sends ajax request to server and accpet eveything except the body tag and inserts it with javascript --}}
    {{-- <script src="https://www.unpkg.com/turbolinks"></script> --}}
      {{-- <form method="post" action="{{route('delete_student',$onerec->id)}}">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Delete</button>
      
      </form>
      </td> --}}
      <!-- Button trigger modal -->
      <td>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$onerec->id}}">
  Delete
</button>

<!-- Modal -->
<form method="post" action="{{route('delete_student',$onerec->id)}}">
  @method('delete')
      @csrf
<div class="modal fade" id="exampleModal{{$onerec->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Record Deleting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this record
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
</form>
</td>
      <td><a href="" class="btn btn-info">view Full Info</a></td>
   




      <!-- <td>Asad</td>
      <td>03-11-2020</td>
      <td class="text-danger">paid</td>
      <td>5000</td> -->

    </tr>

@endforeach
<tr>
<td class="colspan=12" >
{{$allstd->links()}}

</td>
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
<div class="container-fluid col-10 d-flex justify-content-end">


<div class="row col-5 d-flex flex-wrap m-3 border border-info">

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
<div class="container col-5 d-flex  flex-wrap border border-success m-3">

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
{{-- <script src="https://www.unpkg.com/turbolinks"></script> --}}
</body>
</html>