<?php

use Illuminate\Database\Seeder;

class SchoolUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_user')->delete();
        
        \DB::table('school_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'school_id' => 1,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}