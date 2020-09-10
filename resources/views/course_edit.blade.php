<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Course info</title>
    <style>
  .card img {
              width: 300px;
              height: 200px;
            }


      </style>
</head>
@extends('bs4CDN')
@extends('layouts.app')
@section('content')
<body>

    <h1 class="text-center text-primary">Update Course Info</h1>
    <div class="container">
    <form action="{{route('update' , $course->id)}}" method="post"  enctype ='multipart/form-data'>
      @csrf
      @method('put')
      
        <div class="form-group">
          <label for="course_name">Course Title</label>
        <input type="text" class="form-control" name="course_name" value="{{$course->course_name}}" id="course_name" aria-describedby="emailHelp" placeholder="Enter course_name">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
          <label for="course_duration">Course Duration</label>
          <input type="text" class="form-control" name="course_duration" value="{{$course->course_duration}}" id="course_duration" placeholder="Enter Course Duration">
        </div>
        <div class="form-group">
            <label for="course_fee">Course Fee</label>
            <input type="text" class="form-control" name="course_fee" value="{{$course->course_fee}}" id="course_fee" placeholder="Enter Course Fee ">
          </div>
         

          <div class="form-group">
            <label for="course_fee">Current Image</label>

            <div class="card-deck">
              <div class="card">
                <img class="card-img-top img-thumbnail" src="{{asset('images/'.$course->course_image)}}"   alt="Upload Your New Image">
              </div>
            </div>
           
            <label for="course_image" class="btn btn-primary">Upload New Image</label>
            <input type="File" id="course_image" style="display: none"  onchange="readURL(this);" class="form-control" name="course_image" value="{{$course->course_image}}" id="course_image" placeholder="Upload iMage here">
          <small id="emailHelp" class="form-text text-muted">Image should be in jpg ,Jpeg,Png Format and size should be less than 2MB</small>
          </div>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top img-thumbnail" id="newimage" src="https://via.placeholder.com/150" alt="New Uploaded Image">
                             </div>
            </div>
          
          
       
        <button type="submit" class="btn btn-primary">Update Course</button>
      </form>
    </div>
</body>
@endsection
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#newimage')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }




</script>
</html>