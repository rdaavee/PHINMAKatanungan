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
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id')->primary(); //primary key for users table
            $table->enum('user_role', ['Teacher', 'Student']);
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('year_level', ['NONE','SHS', 'First', 'Second', 'Third', 'Fourth'])->nullable();
            $table->string('course_id')->default(null)->nullable();
            $table->string('department_id')->nullable(); 
            $table->string('school_id')->nullable();
            $table->integer('post_count')->default(0);
            $table->integer('followers_count')->default(0);
            $table->integer('following_count')->default(0);
            $table->string('api_token')->nullable();
            $table->timestamps();

            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('set null');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('set null');
            $table->foreign('school_id')->references('school_id')->on('schools')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
