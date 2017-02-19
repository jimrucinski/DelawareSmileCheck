<?php

namespace App\Http\Controllers;
use DB;
use Request;

class SchoolsController extends Controller
{
    public function index(){
        //$schools=DB::table('schools')->get(); // using query builder
        $schools=\App\School::all(); //using the Model
        //return $schools; // this returns the collection use json formatter in chrome to see the values
        return view('schools.schools', compact('schools'));
    }
    public function create()
    {
        return view('schools.create');
    }
    public function show($id){
        $school = \App\School::find($id);
        $students = DB::table('students')
            ->join('races','students.student_race', '=', 'races.id')
            ->select('students.*','races.race')
            ->where('students.school','=',$id)
            ->orderBy('students.student_lName','asc')
            ->get();
        
        return view('schools.show',compact('school','students')); 
    }
    public function store(){
        $input=Request::all();
        \App\Student::create($input);
        return redirect('schools');
    }
}
