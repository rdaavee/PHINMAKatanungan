<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create([
            'school_id' => '01',
            'name' => 'University of Pangasinan',
            'address' => 'Dagupan City',
            'about' => 'Awesome, Real!',
            'logo' => ''
        ]);
    }
}
