@extends('layouts.app')
@section('title','Page Title')
@section('subHeader')
    <h4>Add Student</h4>
@endsection
@section('content')
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
    <div class="panel panel-default" style="padding:.3em">
    <div class="panel-body">
        <form method="POST" action="." accept-charset="UTF-8">            
            <div class="row">
                <input type="text" id="student_fName" name="student_fName" class="form-control" placeholder="Student's first name"/>
            </div>
            <div class="row">
                <input type="text" id="student_lName" name="student_lName" class="form-control" placeholder="Student's last name"/>
            </div>
            <div class="row">
                <input type="text"  id="student_DOB" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" oninvalid="alert('Invalid Date of Birth format.\nPlease use: YYYY-MM-DD');" name="student_DOB" placeholder="YYYY-MM-DD" class="form-control"/>
            </div>
            <div class="row">
            <select id="school" name="school" class="form-control" placeholder="School">
                    @foreach($schools as $school)
                    <option/>
                    <option value={{ $school->id }}>{{ $school->school_name }}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="row">
                <input type="text" id="student_teacher" name="student_teacher" class="form-control" placeholder="Student's primary teacher"/>
            </div>
            <div class="row">
                <input type="text" id="student_grade" name="student_grade" class="form-control" placeholder="Student's current grade"/>
            </div>
            <div class="row">
                <input type="text" id="parent_fName" name="parent_fName" class="form-control" placeholder="Parent's first name"/>
            </div>
            <div class="row">
                <input type="text" id="parent_lName" name="parent_lName"  class="form-control" placeholder="Parent's last name"/>
            </div>
            <div class="row">
                <input type="text" id="parent_address1" name="parent_address1" class="form-control" placeholder="Home street address 1"/>
            </div>
            <div class="row">
                <input type="text" id="parent_address2" name="parent_address2" class="form-control" placeholder="Home street address 2"/>
            </div>
            <div class="row">
                <input type="text" id="parent_city" name="parent_city" class="form-control" placeholder="Home city"/>
            </div>
            <div class="row">
                <input type="text" id="parent_state" name="parent_state" value="DE"  class="form-control" />
            </div>
            <div class="row">
                <input type="text" id="parent_zip" name="parent_zip" class="form-control" placeholder="Home zip code"/>
            </div>
            <div class="row">
                <input type="text" id="parent_phone" name="parent_phone" class="form-control" placeholder="Home phone number"/>
            </div>
            <div class="row">
                <select id="student_race" name="student_race" class="form-control" placeholder="Race">
                    @foreach($races as $race)
                    <option/>
                    <option value={{ $race->id }}>{{ $race->race }}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="row">
                <textarea id="student_allergies" name="student_allergies"  class="form-control" placeholder="Students known allergies."></textarea>
            </div>
            <div class="row">
                <textarea id="student_medicalConditions" name="student_medicalConditions" class="form-control" placeholder="Students known medical conditions"></textarea>
            </div>
            <div clalss="row">
                <input type="submit" text="add student" class="btn btn-info btn-block"/>
            </div>
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        </form>
    </div>
    </div>
    </div>
    </div>

@endsection
