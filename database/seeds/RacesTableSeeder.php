<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
        [
            'race' => 'white'
            
        ],
        [
            'race' => 'black'
        ],
        [
            'race' => 'asian'
        ],
        [
            'race' => 'middle eastern'
        ],
        [
            'race' => 'native american'
        ]
        ]);
    }
}
