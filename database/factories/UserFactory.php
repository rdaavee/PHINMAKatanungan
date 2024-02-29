<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->unique()->uuid,
            'user_role' => $this->faker->randomElement(['Teacher', 'Student']),
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'year_level' => $this->faker->randomElement(['SHS', 'First', 'Second', 'Third', 'Fourth']),
            'course_id' => \App\Models\Course::all()->random()->course_id,
            'department_id' => \App\Models\Department::all()->random()->department_id,
            'school_id' => \App\Models\School::all()->random()->school_id,
        ];
    }
}