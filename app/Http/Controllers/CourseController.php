<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('add_courses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$request->all();
        $image=$request->file('course_image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'),$new_name);
        $data['course_image'] = $new_name;


       Course::create($data);
       return redirect('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $data=$course->all();

      return view('all_course',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
       
        // $course=Course::find($id);

        return view('course_edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request,$id)
    {
       $data = Course::find($id);
       $std=$request->all();
       if($request->has('course_image')){
            $courseImage=$data->course_image;
            $image = $request->file('course_image');
            File::delete(public_path('images/'.$courseImage));
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $std['course_image'] = $new_name;
       }
       
 
        $data->update($std);
    return redirect('all_courses');
    //    return $course;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $courseid)
    {
     $alldata=Course::find($courseid->id);
     $image=$alldata->course_image;
     File::delete(public_path('images/'.$image));

     $alldata->delete();

     return redirect('all_courses');
    }
    public function destroyall(Request $request)
    {
        $ids  = $request->selected;

        
        if ($ids == "") {
            return redirect('all_courses');
        } else {
            $courses = Course::whereIn('id', $ids)->delete();


            return redirect('all_courses');
        }
    }

}
