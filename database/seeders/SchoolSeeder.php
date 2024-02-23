<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            [
                'school_id' => '01',
                'name' => 'University of Pangasinan',
                'address' => 'ARELLANO STREET, DOWNTOWN DISTRICT, DAGUPAN, 2400 PANGASINAN',
                'about' => 'PHINMA UPang continued to offer its brand of premier local education after its 
                acquisition by PHINMA Ed in 2009. It began operation in 1925 as the Dagupan Institute and 
                achieved university status in 1968. Today, its graduates from the Dagupan and Urdaneta campuses 
                excel in board examinations, particularly in nursing and engineering. PHINMA UPang is known for 
                its Nursing, Civil Engineering, Criminology, and Information Technology courses.'
            ],
            [
                'school_id' => '02',
                'name' => 'Araullo University',
                'address' => 'MAHARLIKA HIGHWAY, BRGY. BITAS, CABANATUAN CITY, 3100, NUEVA ECIJA',
                'about' => 'PHINMA Ed acquired PHINMA AU in Cabanatuan City, Nueva Ecija as its first venture into 
                the education industry. The first of PHINMA Education schools, it piloted non-traditional approaches to 
                learning to strengthen academic programs. From its humble beginnings as a law school in the 1950s, it 
                is now a major educational institution that provides basic, tertiary, and professional education to 
                Novo Ecijanos.'
            ],
            [
                'school_id' => '03',
                'name' => 'Cagayan De Oro College',
                'address' => 'PUROK 6, CAGAYAN DE ORO, 9000 LALAWIGAN NG MISAMIS ORIENTAL',
                'about' => 'PHINMA COC was acquired by PHINMA Ed in 2005 to make quality education 
                accessible to students from all walks of life in Mindanao, especially Misamis Oriental, 
                Camiguin, and Bukidnon. The conducive learning environment allows PHINMA COC to produce 
                board topnotchers in various professional fields. PHINMA COC opened its second campus in 
                Puerto in 2012.'
            ],
            [
                'school_id' => '04',
                'name' => 'UNIVERSITY OF ILOILO',
                'address' => 'RIZAL ST, ILOILO CITY PROPER, ILOILO CITY, 5000 ILOILO',
                'about' => 'The historic PHINMA UI was acquired by PHINMA Ed in 2008. 
                The school was established in 1947 as Iloilo City Colleges by Fernando H. Lopez, 
                the former Vice President of the Philippines and then Mayor of Iloilo City. In 1968, it 
                became the 32nd university in the Philippines. PHINMA Education continues UI’s tradition of 
                quality learning toward national development.'
            ],
        ];

        foreach ($schools as $schoolData) {
            School::create($schoolData);
        }
    }
}
