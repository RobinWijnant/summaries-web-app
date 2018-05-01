<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educations')->insert([
            'name' => 'Elektronica/ICT',
            'years' => 3,
            'type' => 'Bachelor',
            'school_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
