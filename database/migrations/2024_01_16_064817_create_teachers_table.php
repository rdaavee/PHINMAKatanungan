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
        Schema::create('teachers', function (Blueprint $table) {
            $table->string('teacher_id')->primary(); //primary key for students table
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('department_id')->nullable(); 
            $table->string('school_id')->nullable();
            $table->text('profile_picture')->nullable();
            $table->integer('post_count')->default(0);
            $table->integer('followers_count')->default(0);
            $table->integer('following_count')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('set null');
            $table->foreign('school_id')->references('school_id')->on('schools')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
