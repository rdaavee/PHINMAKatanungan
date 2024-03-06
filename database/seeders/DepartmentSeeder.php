<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'department_id' => 'CITE',
                'name' => 'College of Information Technology Education',
            ],
            [
                'department_id' => 'CEA',
                'name' => 'College of Engineering and Architecture',
            ],
            [
                'department_id' => 'CAHS',
                'name' => 'College of Allied Health Sciences',
            ],
            [
                'department_id' => 'CCJE',
                'name' => 'College of Criminal Justice Education',
            ],
            [
                'department_id' => 'CELA',
                'name' => 'College of Education and Liberal Arts',
            ],
            [
                'department_id' => 'CMA',
                'name' => 'College of Management and Accountancy',
            ],
            [
                'department_id' => 'SHS',
                'name' => 'Senior High School',
            ],
        ];

        foreach ($departments as $departmentData) {
            Department::create($departmentData);
        }
    }
}
