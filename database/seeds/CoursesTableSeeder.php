<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Linux Server',
                'description' => NULL,
                'education_id' => 1,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Windows Server',
                'description' => NULL,
                'education_id' => 1,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Server administration',
                'description' => NULL,
                'education_id' => 1,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Koeltechnieken',
                'description' => NULL,
                'education_id' => 3,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Probleem oplossend denken',
                'description' => NULL,
                'education_id' => 4,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}