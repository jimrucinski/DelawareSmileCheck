@extends('layouts.app')
@section('title','Page Title')
@section('subHeader')
    
@endsection
@section('content')
           <h5>{{$school->school_name}}</h5>
           {{$school->school_address1}}<br/>
           @if(!is_null($school->school_address2))
                {{$school->school_address2}}<br/>
            @endif
           {{$school->school_city}},{{$school->school_state}} {{$school->school_zip}}<br/>
           {{$school->school_phone}}
<h4>students</h4>
<table class="table table-striped table-hover ">
<tr>
    <th>First name</th><th>Last Name</th><th>Race</th><th>Teacher</th><th>Grade</th>
</tr>
@foreach ($students as $student)
    <tr><td>{{$student->student_fName}}</td><td>{{$student->student_lName}}</td><td>{{$student->race}}</td><td>{{$student->student_teacher}}</td><td>{{$student->student_grade}}</tr>
    @if($student->student_allergies!="")
    <tr><td colspan=5 class="danger"><strong>Allergies</strong>: {{$student->student_allergies}}</td></tr>
    @endif
    @if($student->student_medicalConditions!="")
    <tr><td colspan=5 class="danger"><strong>Medical Conditions</strong>: {{$student->student_medicalConditions}}</td></tr>
    @endif
@endforeach
</table>

@endsection
