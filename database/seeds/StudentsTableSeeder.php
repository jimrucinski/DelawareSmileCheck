<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
            [
            'student_fName' => 'Benjamin',
            'student_lName' => 'Dover',
            'student_DOB' => date_create("2011-03-15"),
            'school' => 4,
            'student_teacher' =>'Mrs. Lipka',
            'student_grade' => 4,
            'parent_fName' => 'Dick',
            'parent_lName' => 'Dover',
            'parent_address1' => '3219 11th St.',
            'parent_address2' => 'Apt. 2b',
            'parent_city' => 'New Castle',
            'parent_state' => 'DE',
            'parent_zip' => '19720',
            'parent_phone' => '302-111-2222',
            'student_race' => 1,
            'student_allergies'=>'bread, donuts and gravy',
            'student_medicalConditions'=>'ADD'
        ],
        [
            'student_fName' => 'Mary',
            'student_lName' => 'Bowden',
            'student_DOB' => date_create("2011-06-01"),
            'school' => 4,
            'student_teacher' => 'Mr. Aarots',
            'student_grade' => 4,
            'parent_fName' => 'Louise',
            'parent_lName' => 'Bowden',
            'parent_address1' => '1111 Harison St.',
            'parent_address2' => null,
            'parent_city' => 'Wilmington',
            'parent_state' => 'DE',
            'parent_zip' => '19805',
            'parent_phone' => '302-658-2424',
            'student_race' => 2,
            'student_allergies'=>null,
            'student_medicalConditions'=>null
        ]
        ]);
    }
}
