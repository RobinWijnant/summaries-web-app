<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SchoolUserTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(SummariesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
