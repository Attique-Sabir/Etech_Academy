<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\addrequest;
use App\AddCourse;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add_course');
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
        $validateddata = $request->validate([
            'student_name'=>'required',
            'father_name'=>'required',
            'age'=>'required',
            'mobile_no'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'course_name'=>'required',
            'course_duration'=>'required',
            'joining_date'=>'required',
            'ending_date'=>'required',
            'course_fee'=>'required',
            'discount_fee'=>'required',
            'paid_fee'=>'required',
            'remaining_fee'=>'required',
            'image'=>'required',

        ]);
        
        // $validateddata=$request->all();
        // return $validateddata;

        AddCourse::create($validateddata);
        return redirect('/home');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
