<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('bs4CDN')

    <title>Add New Courses here</title>
</head>
<body>
@extends('layouts.app')
@section('content')

<div class="container-fluid">


<h1 class="text-danger text-center bg-dark">Add New Student Here</h1>
<div class="container">


<form method="post" action="{{route('add_students')}}" enctype ='multipart/form-data' >
  @csrf
<div class="row">
  <div class="form-group col-md-4">
    <label for="student_name">Student Name</label>
    <input type="text" class="form-control" name="student_name"  placeholder="Enter student_name" value="{{old('student_name')}}">
    @error('student_name')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  <div class="form-group col-md-4">
    <label for="father_name">Father Name</label>
    <input type="text" class="form-control" name="father_name"placeholder="Enter father_name " value="{{old('father_name')}}">
    @error('father_name')
<p class="text-danger">{{$message}}</p>
@enderror
  </div>
  <div class="form-group col-md-4">
    <label for="age">Age</label>
    
    <input type="text" class="form-control" name="age"placeholder="Enter age" value="{{old('age')}}">
    @error('age')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>

  <div class="form-group col-md-4">
    <label for="mobile_no">Mobile #</label>
    <input type="text" class="form-control" name="mobile_no"placeholder="Enter mobile_no" value="{{old('mobile_no')}}" >
    @error('mobile_no')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  <div class="form-group col-md-4 d-flex align-items-center">
    <label for="gender">Gender
    <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" id="s10" name="gender" value="Male" {{old('gender')=="Male" ? 'checked' : ''}} />Male
  
    {{-- <input type="radio" class="form-check-input" name="gender" value="{{old('gender')}}">Male --}}
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="Female"  {{old('gender')=="Female" ? 'checked' : ''}} >Female
  </label></label>
</div>
@error('optradio')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-4">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter address">{{old('address')}}</textarea>
    @error('address')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  </div>
<h1 class="text-center bg-info text-white">Course info</h1>

  <div class="row">
    <div class="form-group col-md-4">
    <label for="course_duration">Course Name</label>

      <select class="custom-select" id="inputGroupSelect02" name="course_name">
    <option value="" selected disabled hidden>Choose here</option>
        
        @foreach ($data as $course)

        <option value="choose here">{{$course->course_name}}</option>
    @endforeach
      </select>
    @error('course_name')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  <div class="form-group col-md-4">
    <label for="course_duration">Course Duration</label>
    <input type="text" class="form-control" name="course_duration"placeholder="Enter course_duration" value="{{old('course_duration')}}">
    @error('course_duration')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  <div class="form-group col-md-4">
    <label for="course_fee">Course Fee</label>
    <input type="text" class="form-control" name="course_fee"placeholder="Enter course_fee" value="{{old('course_fee')}}">
    @error('course_fee')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  </div>
<div class="row">
  <div class="form-group col-md-4">
    <label for="joining_date">joining Date</label>
    <input type="text" class="form-control" name="joining_date"placeholder="Enter joining_date" value="{{old('joining_date')}}">
    @error('joining_date')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  <div class="form-group col-md-4">
    <label for="ending_date">Ending Date</label>
    <input type="text" class="form-control" name="ending_date"placeholder="Enter ending_date" value="{{old('ending_date')}}">
    @error('ending_date')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  </div>

<div class="row">

  <div class="form-group col-md-4">
    <label for="discount_fee">Discount Fee</label>
    <input type="text" class="form-control" name="discount_fee"placeholder="Enter discount_fee" value="{{old('discount_fee')}}">
    @error('discount_fee')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>  <div class="form-group col-md-4">
    <label for="paid_fee">Paid Fee</label>
    <input type="text" class="form-control" name="paid_fee"placeholder="Enter paid_fee" value="{{old('paid_fee')}}">
    @error('paid_fee')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>  <div class="form-group col-md-4">
    <label for="remaining_fee">Remaining Fee</label>
    <input type="text" class="form-control" name="remaining_fee"placeholder="Enter remaining_fee" value="{{old('remaining_fee')}}">
    @error('remaining_fee')
<p class="text-danger">{{$message}}</p>
@enderror

  </div>
  </div>
<div class="row">
  </div>  <div class="form-group col-md-4">
    <label for="image">image</label>
    <input type="file" class="form-control" name="image" placeholder="Enter image" value="{{old('image')}}">
    @error('image')
<p class="text-danger">{{$message}}</p>
@enderror
</div>
<div class="row">
</div>  <div class="form-group col-md-4">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
@endsection

</body>
</html>