<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'student_id' => '03-2223-044501',
                'first_name' => 'Ranier',
                'middle_name' => 'Tan',
                'last_name' => 'Arcega',
                'email' => 'rata.arcega.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
            [
                'student_id' => '03-2223-038891',
                'first_name' => 'David Aldrin',
                'middle_name' => 'Ferrer',
                'last_name' => 'Mondero',
                'email' => 'dafe.mondero.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
            [
                'student_id' => '03-2122-032795',
                'first_name' => 'Johann Gene',
                'middle_name' => 'Sorio',
                'last_name' => 'Custodio',
                'email' => 'joso.custodio.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
            [
                'student_id' => '03-2021-02435',
                'first_name' => 'Danielle Marie',
                'middle_name' => 'Castro',
                'last_name' => 'De Guzman',
                'email' => 'anca.deguzman.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
            [
                'student_id' => '03-2122-032298',
                'first_name' => 'Jean',
                'middle_name' => 'Muyon',
                'last_name' => 'Collado',
                'email' => 'jemu.collado.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
            [
                'student_id' => '03-2122-876542',
                'first_name' => 'dsfads',
                'middle_name' => 'ds',
                'last_name' => 'Colladassao',
                'email' => 'jemu.collzado.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
            [
                'student_id' => '03-2122-754634',
                'first_name' => 'Jeadn',
                'middle_name' => 'Muyson',
                'last_name' => 'Colflado',
                'email' => 'jemu.collaxdo.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
            [
                'student_id' => '03-2122-512352',
                'first_name' => 'Jeadsan',
                'middle_name' => 'Mufsayon',
                'last_name' => 'Collxzado',
                'email' => 'jemu.collcxado.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'school_id' => '01',
            ],
        ];
        foreach ($students as $studentsData) {
            Student::create($studentsData);
        }
    }
}
