<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            [
            'school_name' => 'Family Foundations Academy',
            'school_address1' => '170 Lukens Dr.',
            'school_address2' => null,
            'school_city' => 'New Castle',
            'school_state' => 'DE',
            'school_zip' => '19720',
            'school_phone' => '302-324-8901'
        ],
        [
            'school_name' => 'East Side Charter',
            'school_address1' => '3000 N. Claymont St.',
            'school_address2' => null,
            'school_city' => 'Wilmington',
            'school_state' => 'DE',
            'school_zip' => '19802',
            'school_phone' => '302-762-5834'
        ]
        ]);
    }
}
