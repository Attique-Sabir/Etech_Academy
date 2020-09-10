<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Courses</title>
</head>
@extends('bs4CDN')
@extends('layouts.app')
@section('content')
  
<body>
    <h2 class="text-center text-primary">All Courses List</h2>
<form method="post" action="{{route('deleteall')}}">
    <button class="btn btn-danger">Delete Selected</button>
    @csrf
    <div class="conatiner">
<table class="table table-striped">
<thead class="bg-dark text-white">
    <th><div class="checkbox">
        <input id="selectAll" type="checkbox"  />
        <label for="selectAll"></label>
      </div></th>
{{-- <th><button class="btn btn-info  mt-2"> Delete All Selected  </button>  </th> --}}
<th>Course Image   </th>
<th> Course Name    </th>
<th> Course Fee    </th>
<th> Course Duration    </th>
<th>  Edit   </th>
<th>  Delete   </th>
</thead>
<tbody>
<tr>
    @foreach ($data as $course)
        <td>
            <div class="checkbox">
            <input type="checkbox" name="selected[]" value="{{$course->id}}" id="box1">
                <label for="box1"></label>
            </div>

        </td>

<td><img src="{{asset('images/'.$course->course_image)}}"class="img-thumbnail" style="image:width:100px;height:48px;"></td>
<td>{{$course->course_name}}     </td>
<td> {{$course->course_fee}}    </td>
<td>{{$course->course_duration}}     </td>
<td>
    <a href="{{route('edit_course',$course)}}" class="btn btn-primary">Edit</td>
<td>
<form method="post" action="{{route('delete_course',$course->id)}}">
      @method('delete')  
      @csrf
   <button type="submit" class="btn btn-danger">Delete</button></td>
        </form>
        </tr>
@endforeach


</tbody>
</form>


</table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            var $selectAll = $('#selectAll'); 
            var $table = $('.table'); 
            var $tdCheckbox = $table.find('tbody input:checkbox');
            // Select or deselect all checkboxes depending on main checkbox change
            $selectAll.on('click', function () {
                $tdCheckbox.prop('checked', this.checked);
            });
        });
    </script>
    
</body>
@endsection
</html>