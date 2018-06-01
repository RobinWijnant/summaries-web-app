<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Robin',
                'lastname' => 'Wijnant',
                'email' => 'robin.wijnant@student.odisee.be',
                'password' => '$2y$10$jn.5CQh7h7zaiitx6B8yFeDJNlOuBNmwShdRqafuMnooijmPfE4Vi',
                'remember_token' => 'Fhl0O3BcrNR1SNc17E7uv3k7xhhkFd4WJCOZQRdPIORklBaJWNjr5qvodsO8',
                'created_at' => '2018-05-04 15:46:54',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 21,
                'firstname' => 'Daan',
                'lastname' => 'Anraed',
                'email' => 'daan.anraed@student.vives.be',
                'password' => '$2y$10$Gew98PFjvYKgxllJTVtRv.OrjE9RDdsR0I0LJh.aJcD82/cNoRpEO',
                'remember_token' => 'mb1OzfpdDhtpemaXCrt6c2jovLjgfr1lqLdxnyOFxKRNcNZE20XxkAlXBGxU',
                'created_at' => '2018-06-01 12:42:49',
                'updated_at' => '2018-06-01 12:42:49',
            ),
            2 => 
            array (
                'id' => 22,
                'firstname' => 'Jonas',
                'lastname' => 'Devrient',
                'email' => 'jonas.devrient@student.hogent.be',
                'password' => '$2y$10$XYymk24Twd7lRoqFbop8c.FVSDRPOSYVi11mViocNEqab/rZl47Ni',
                'remember_token' => NULL,
                'created_at' => '2018-06-01 12:48:14',
                'updated_at' => '2018-06-01 12:48:14',
            ),
        ));
        
        
    }
}