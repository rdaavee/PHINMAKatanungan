<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'user_id' => '03-2223-043502',
                'first_name' => 'Ranny',
                'middle_name' => 'Tanny',
                'last_name' => 'Arci',
                'gender' => 'Male',
                'email' => 'rata.arci.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'NONE',
                'department_id' => 'SHS',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2223-044203',
                'first_name' => 'Ranny1',
                'middle_name' => 'Tanny3',
                'last_name' => 'Arci2',
                'gender' => 'Female',
                'email' => 'rata.arci2.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'NONE',
                'department_id' => 'SHS',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2223-044501',
                'first_name' => 'Ranier',
                'middle_name' => 'Tan',
                'last_name' => 'Arcega',
                'gender' => 'Male',
                'email' => 'rata.arcega.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2223-038891',
                'first_name' => 'David Aldrin',
                'middle_name' => 'Ferrer',
                'last_name' => 'Mondero',
                'gender' => 'Male',
                'email' => 'dafe.mondero.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2122-032795',
                'first_name' => 'Johann Gene',
                'middle_name' => 'Sorio',
                'last_name' => 'Custodio',
                'gender' => 'Male',
                'email' => 'joso.custodio.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2021-02435',
                'first_name' => 'Danielle Marie',
                'middle_name' => 'Castro',
                'last_name' => 'De Guzman',
                'gender' => 'Female',
                'email' => 'anca.deguzman.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2122-032298',
                'first_name' => 'Jean',
                'middle_name' => 'Muyon',
                'last_name' => 'Collado',
                'gender' => 'Female',
                'email' => 'jemu.collado.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSEE',
                'department_id' => 'CEA',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2122-876542',
                'first_name' => 'dsfads',
                'middle_name' => 'ds',
                'last_name' => 'Colladassao',
                'gender' => 'Female',
                'email' => 'jemu.collzado.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSIT',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2122-754634',
                'first_name' => 'Jeadn',
                'middle_name' => 'Muyson',
                'last_name' => 'Colflado',
                'gender' => 'Female',
                'email' => 'jemu.collaxdo.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'ABPolSci',
                'department_id' => 'CELA',
                'school_id' => '01',
            ],
            [
                'user_id' => '03-2122-512352',
                'first_name' => 'Jeadsan',
                'middle_name' => 'Mufsayon',
                'last_name' => 'Collxzado',
                'gender' => 'Female',
                'email' => 'jemu.collcxado.up@phinmaed.com',
                'password' => '12345678',
                'year_level' => 'Second',
                'course_id' => 'BSCE',
                'department_id' => 'CEA',
                'school_id' => '01',
            ],
        ];
        foreach ($students as $studentsData) {
            User::create($studentsData);
        }
    }
}
