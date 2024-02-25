<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'teacher_id' => '03-2223-044501',
                'first_name' => 'dsa',
                'middle_name' => 'fsa',
                'last_name' => 'cxz',
                'email' => 'fsa.sad.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044431',
                'first_name' => 'gds',
                'middle_name' => 'cxz',
                'last_name' => 'qew',
                'email' => 'dsa.fcxcz.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044551',
                'first_name' => 'hggh',
                'middle_name' => 'hkg',
                'last_name' => 'hfd',
                'email' => 'adsf.uyk.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044561',
                'first_name' => 'vcxncv',
                'middle_name' => 'xcv',
                'last_name' => 'qewas',
                'email' => 'dsad.gsad.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044571',
                'first_name' => 'dgha',
                'middle_name' => 'vxcz',
                'last_name' => 'mbvxx',
                'email' => 'kjh.trew.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044502',
                'first_name' => 'nvb',
                'middle_name' => 'cv',
                'last_name' => 'dsadf',
                'email' => 'hew.dsa.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044503',
                'first_name' => 'ytuyt',
                'middle_name' => 'ytr',
                'last_name' => 'rewr',
                'email' => 'rew.rewrw.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044504',
                'first_name' => 'kuuku',
                'middle_name' => 'kuuk',
                'last_name' => 'khhk',
                'email' => 'kjhhj.kjkhj.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044505',
                'first_name' => 'mnnmb',
                'middle_name' => 'bnb',
                'last_name' => 'bnb',
                'email' => 'vbvb.vbbv.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
            [
                'teacher_id' => '03-2223-044506',
                'first_name' => 'cvcvx',
                'middle_name' => 'zxz',
                'last_name' => 'cxzzxc',
                'email' => 'cxzxc.zcxczx.up@phinmaed.com',
                'password' => '12345678',
                'department_id' => 'CITE',
                'school_id' => '01',
            ],
        ];
        foreach ($teachers as $teachersData) {
            Teacher::create($teachersData);
        }
    }
}
