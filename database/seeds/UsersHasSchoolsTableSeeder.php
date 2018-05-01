<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersHasSchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_has_schools')->insert([
            'user_id' => 1,
            'school_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
