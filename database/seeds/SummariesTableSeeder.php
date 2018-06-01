<?php

use Illuminate\Database\Seeder;

class SummariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('summaries')->delete();
        
        \DB::table('summaries')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Actieplan 2020',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:33:35',
                'updated_at' => '2018-06-01 13:33:35',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Deel 1',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:33:59',
                'updated_at' => '2018-06-01 13:33:59',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Deel 2',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:34:19',
                'updated_at' => '2018-06-01 13:34:19',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Jaarverslag',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:34:39',
                'updated_at' => '2018-06-01 13:34:39',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Oefeningenreeks',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:35:04',
                'updated_at' => '2018-06-01 13:35:04',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Overzicht',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:35:24',
                'updated_at' => '2018-06-01 13:35:24',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Scriptie',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:35:41',
                'updated_at' => '2018-06-01 13:35:41',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Wiskunde in beweging',
                'course_id' => 5,
                'user_id' => 22,
                'created_at' => '2018-06-01 13:36:04',
                'updated_at' => '2018-06-01 13:36:04',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Adaptiemogelijkheden',
                'course_id' => 4,
                'user_id' => 21,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            9 => 
            array (
                'id' => 72,
                'name' => 'Les 1',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            10 => 
            array (
                'id' => 73,
                'name' => 'Les 2',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            11 => 
            array (
                'id' => 74,
                'name' => 'Les 3',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            12 => 
            array (
                'id' => 75,
                'name' => 'Les 4',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            13 => 
            array (
                'id' => 76,
                'name' => 'Les 5',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            14 => 
            array (
                'id' => 77,
                'name' => 'Les 6',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            15 => 
            array (
                'id' => 78,
                'name' => 'Les 7',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            16 => 
            array (
                'id' => 79,
                'name' => 'Les 7B',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            17 => 
            array (
                'id' => 80,
                'name' => 'Les 8',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            18 => 
            array (
                'id' => 81,
                'name' => 'Les 9',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
            19 => 
            array (
                'id' => 82,
                'name' => 'Les 10',
                'course_id' => 3,
                'user_id' => 1,
                'created_at' => '2018-06-01 13:36:51',
                'updated_at' => '2018-06-01 13:36:51',
            ),
        ));
        
        
    }
}