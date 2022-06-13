<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Student::factory()->create([
            'name' => 'Student',
            'student_id' => '0123',
            'email' => 'teacher@email.com',
            'created_at' => null,
            'updated_at' => null
        ]);
    }
}
