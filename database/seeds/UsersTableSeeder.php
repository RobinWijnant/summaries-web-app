<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'lastname' => 'Wijnant',
            'email' => 'robin.wijnant@student.odisee.be',
            'password' => bcrypt('demo'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
