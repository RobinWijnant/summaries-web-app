<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Odisee',
                'campus' => 'Gent',
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'HoGent',
                'campus' => 'Gent',
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Vives',
                'campus' => 'Kortrijk',
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}