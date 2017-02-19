<?php

namespace App\Http\Controllers;

use Request;
use DB;

class StudentsController extends Controller
{
    
    function create(){
        $races = DB::table('races')->orderBy('race','asc')->get();
        $schools = \App\School::getAllSchools();       
        return view('students.create',compact('races','schools'));
    }
    public function store(){
        $input=Request::all();
        \App\Student::create($input);
        return redirect('schools');
    }
}
