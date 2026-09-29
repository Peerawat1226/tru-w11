<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. สร้างข้อมูลสาขาวิชาในตาราง program
        DB::table('program')->insert([
            ['id' => 1, 'pgm_code' => 'CS', 'pgm_name' => 'Computer Science', 'degree' => 'Bachelor'],
            ['id' => 2, 'pgm_code' => 'IT', 'pgm_name' => 'Information Technology', 'degree' => 'Bachelor'],
            ['id' => 3, 'pgm_code' => 'SE', 'pgm_name' => 'Software Engineering', 'degree' => 'Bachelor'],
            ['id' => 4, 'pgm_code' => 'DS', 'pgm_name' => 'Data Science', 'degree' => 'Bachelor'],
            ['id' => 5, 'pgm_code' => 'CYS', 'pgm_name' => 'Cyber Security', 'degree' => 'Bachelor'],
        ]);

        // 2. สุ่มสร้างข้อมูลนักศึกษา 100 คนลงตาราง student
        Student::factory(100)->create();
    }
}