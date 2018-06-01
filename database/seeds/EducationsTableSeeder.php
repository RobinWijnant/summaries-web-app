<?php

use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('educations')->delete();
        
        \DB::table('educations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Elektronica/ICT',
                'years' => 3,
                'type' => 'Bachelor',
                'school_id' => 1,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ontwerp en productietechnologie',
                'years' => 3,
                'type' => 'Bachelor',
                'school_id' => 1,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Agro en biotechnieken',
                'years' => 3,
                'type' => 'Bachelor',
                'school_id' => 3,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Toegepaste informatica',
                'years' => 3,
                'type' => 'Bachelor',
                'school_id' => 2,
                'created_at' => '2018-06-01 13:14:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}