<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        {
           // $addstudent=AddStudent::latest()->limit(1)->first();
           $addstudent=Student::orderBy('id','DESC')->limit(1)->first();
            $total=Student::count();
            $allstd=Student::paginate(5);
            $allstds=Student::all();
            $all_courses=Course::all();
            $total_courses=Course::count();

       
            return view('home',['total' => $total , 'addstudent' => $addstudent ,'allstd'=>$allstd,'allstds'=>$allstds,'all_courses'=>$all_courses,'total_courses'=>$total_courses]);
        }
    }

}
