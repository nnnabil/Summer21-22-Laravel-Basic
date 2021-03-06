<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Teacher::factory()->create([
            'name' => 'Teacher1',
            'phone' => '0123',
            'email' => 'teacher@email.com',
            'password' => '1234',
        ]);
    }
}
