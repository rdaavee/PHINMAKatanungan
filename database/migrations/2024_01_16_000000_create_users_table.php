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

            $table->string('user_id')->primary(); //student number
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('user_role', ['Student', 'Teacher']);
            $table->enum('year_level', ['SHS', 'First', 'Second', 'Third', 'Fourth']);
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('school_id')->nullable();
            $table->text('profile_picture')->default(NULL);
            $table->integer('post_count')->default(0);
            $table->integer('followers_count')->default(0);
            $table->integer('following_count')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('set null');
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('set null');
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
