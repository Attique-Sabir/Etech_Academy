<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Courses Here</title>
</head>
@extends('bs4CDN')
@extends('layouts.app')
@section('content')
<body>

    <h1 class="text-center text-primary">Add New Course Here</h1>
    <div class="container">
    <form action="{{route('create_courses')}}" method="post"  enctype ='multipart/form-data'>
      @csrf
        <div class="form-group">
          <label for="course_name">Course Title</label>
          <input type="text" class="form-control" name="course_name" id="course_name" aria-describedby="emailHelp" placeholder="Enter course_name">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
          <label for="course_duration">Course Duration</label>
          <input type="text" class="form-control" name="course_duration" id="course_duration" placeholder="Enter Course Duration">
        </div>
        <div class="form-group">
            <label for="course_fee">Course Fee</label>
            <input type="text" class="form-control" name="course_fee" id="course_fee" placeholder="Enter Course Fee ">
          </div>
          <div class="form-group">
            <label for="course_image">Course Image</label>
            <input type="File" class="form-control" name="course_image" id="course_image" placeholder="Upload iMage here">
          <small id="emailHelp" class="form-text text-muted">Image should be in jpg ,Jpeg,Png Format and size should be less than 2MB</small>

          </div>
       
        <button type="submit" class="btn btn-primary">Add Course</button>
      </form>
    </div>
</body>
@endsection
</html>