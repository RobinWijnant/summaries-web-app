<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Robin',
            'firstname' => 'Wijnant',
            'email' => 'robin.wijnant@student.odisee.be',
            'password' => bcrypt('test'),
        ]);
    }
}
