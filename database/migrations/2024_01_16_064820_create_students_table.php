<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_id')->primary(); //primary key for students table
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('year_level', ['SHS', 'First', 'Second', 'Third', 'Fourth']); 
            $table->string('course_id')->nullable();
            $table->string('school_id')->nullable();
            $table->text('profile_picture')->default(NULL);
            $table->integer('post_count')->default(0);
            $table->integer('followers_count')->default(0);
            $table->integer('following_count')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('set null');
            $table->foreign('school_id')->references('school_id')->on('schools')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};