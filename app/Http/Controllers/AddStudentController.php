<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Student;

class AddStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data=Course::all();
        // $allcourses=AddStudent::all();
        // return view('allcourses',compact('allcourses'));
        return view('add_student',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('allcourses');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coursefee=$request->course_fee;
        $discountfee=$request->discount_fee;
        $paidafterdiscount= $coursefee-$discountfee;
        $paidfee= $request->paid_fee;
        $remaining=$paidafterdiscount-$paidfee;

        // return $remaining;

        $validateddata = $request->validate([
            'student_name'=>'required',
            'father_name'=>'required',
            'age'=>'required',
            'mobile_no'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'course_name'=>'required',
            'course_duration'=>'required',
            'joining_date'=>'required|date|after_or_equal:today',
            'ending_date'=>'required|date|after:joining_date',
            'course_fee'=>'required',
            'discount_fee'=>'required|integer|lte:'.$coursefee,
            'paid_fee'=>'required|integer|lte:'.$paidafterdiscount,
            'remaining_fee'=>'required|integer|lte:'.$remaining,
            'image'=>'required',

        ]);
            $data=$request->all();
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $data['image'] = $new_name;
            
            Student::create($data); 
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Student $id)
    {      
        $validateddata = $request->validate([
            'image'=>'required',

        ]);
         $student =  Student::find($id);
         $extension = $request->image->extension();
         $filename = time()."_.".$extension;
         $request->image->move(public_path('images'),$filename);
         return $filename;


        // return $id;
        return view('home' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Student $std)
    {
        // return $request;
            $std=$request->all();
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $std['image'] = $new_name;
        
            $data=Student::find($request->id);
        
        // return $std;
        $data->update($std);
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $allstd)
    {
   $allstd=Student::find($allstd->id);
   $allstd->delete();
   return redirect('/home');
    }
}
