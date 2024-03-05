<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            AdminSeeder::class,
            SchoolSeeder::class,
            DepartmentSeeder::class,
            CourseSeeder::class
        ]);

        \App\Models\User::factory(60)->create();
        \App\Models\Announcement::factory(15)->create();
        \App\Models\Post::factory(36)->create();
        \App\Models\Comment::factory(51)->create();
    }
}
