<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'name' => 'Odisee',
            'campus' => 'Gent',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name' => 'HoGent',
            'campus' => 'Gent',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('schools')->insert([
            'name' => 'Vives',
            'campus' => 'Kortrijk',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
