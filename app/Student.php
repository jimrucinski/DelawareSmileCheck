<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'student_fName',
        'student_lName',
        'student_DOB',
        'school',
        'student_teacher',
        'student_grade',
        'parent_fName',
        'parent_lName',
        'parent_address1',
        'parent_address2',
        'parent_city',
        'parent_state',
        'parent_zip',
        'parent_phone',
        'student_race',
        'student_allergies',
        'student_medicalConditions'
    ];

    public function findAllForSchool($id){
        $allSchoolStudents = \DB::statement('call getStudentsBySchool(' .$id . ')');
        return new Student($allSchoolStudents);
    }
    
}
