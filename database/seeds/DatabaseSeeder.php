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
        $this->call(JobsTableSeeder::class);
        $this->call(ApplicantsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
    }
}
