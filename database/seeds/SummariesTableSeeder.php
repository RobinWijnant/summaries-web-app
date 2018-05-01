<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SummariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('summaries')->insert([
            'name' => 'Alle labo oplossingen',
            'course_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('summaries')->insert([
            'name' => 'Alle opgave oplossingen',
            'course_id' => 2,
            'user_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
