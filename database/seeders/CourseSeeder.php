<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'course_id' => 'NONE',
                'name' => 'The user is a teacher',
            ],
            [
                'course_id' => 'BSIT',
                'name' => 'Bachelor of Science in Information Technology',
                'department_id' => 'CITE'
            ],
            //CEA
            [
                'course_id' => 'BSCE',
                'name' => 'Bachelor of Science in Civil Engineering',
                'department_id' => 'CEA'
            ],
            [
                'course_id' => 'BSEE',
                'name' => 'Bachelor of Science in Electrical Engineering',
                'department_id' => 'CEA'
            ],
            [
                'course_id' => 'BSArch',
                'name' => 'Bachelor of Science in Architecture',
                'department_id' => 'CEA'
            ],
            [
                'course_id' => 'BSCpE',
                'name' => 'Bachelor of Science in Computer Engineering',
                'department_id' => 'CEA'
            ],
            [
                'course_id' => 'BSME',
                'name' => 'Bachelor of Science in Mechanical Engineering',
                'department_id' => 'CEA'
            ],
            //CAHS
            [
                'course_id' => 'BSN',
                'name' => 'Bachelor of Science in Nursing',
                'department_id' => 'CAHS'
            ],
            [
                'course_id' => 'BSPharm',
                'name' => 'Bachelor of Science in Pharmacy',
                'department_id' => 'CAHS'
            ],
            [
                'course_id' => 'BMLS',
                'name' => 'Bachelor in Medical Laboratory Science',
                'department_id' => 'CAHS'
            ],
            [
                'course_id' => 'BSPsych',
                'name' => 'Bachelor of Science in Psychology',
                'department_id' => 'CAHS'
            ],
            //CCJE
            [
                'course_id' => 'BSCrim',
                'name' => 'Bachelor of Science in Criminology',
                'department_id' => 'CCJE'
            ],
            //CELA
            [
                'course_id' => 'ABComm',
                'name' => 'Bachelor of Arts in Communication',
                'department_id' => 'CELA'
            ],
            [
                'course_id' => 'ABPolSci',
                'name' => 'Bachelor of Arts in Political Science',
                'department_id' => 'CELA'
            ],
            [
                'course_id' => 'BSEEduc',
                'name' => 'Bachelor of Science in Elementary Education',
                'department_id' => 'CELA'
            ],
            [
                'course_id' => 'BSED',
                'name' => 'Bachelor of Secondary Education',
                'department_id' => 'CELA'
            ],
            //CMA
            [
                'course_id' => 'BSA',
                'name' => 'Bachelor of Science in Accountancy',
                'department_id' => 'CMA'
            ],
            [
                'course_id' => 'BSMA',
                'name' => 'Bachelor of Science in Management Accounting',
                'department_id' => 'CMA'
            ],
            [
                'course_id' => 'BSAT',
                'name' => 'Bachelor of Science in Accountancy Technology',
                'department_id' => 'CMA'
            ],
            [
                'course_id' => 'BSHM',
                'name' => 'Bachelor of Science in Hospitality Management',
                'department_id' => 'CMA'
            ],
            [
                'course_id' => 'BSTM',
                'name' => 'Bachelor of Science in Tourism Management',
                'department_id' => 'CMA'
            ],
            [
                'course_id' => 'BSBA',
                'name' => 'Bachelor of Science in Business Administration',
                'department_id' => 'CMA'
            ],
        ];

        foreach ($courses as $courseData) {
            Course::create($courseData);
        }
    
    }
}
