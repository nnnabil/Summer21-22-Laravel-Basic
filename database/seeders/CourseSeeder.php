<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Course::factory()->create([
            'c_name' => 'PL1',
            'code' => 'CSC101',
            'teacherId' => '1',
            'created_at' => NULL,
            'updated_at' => NULL,
        ]);
    }
}
