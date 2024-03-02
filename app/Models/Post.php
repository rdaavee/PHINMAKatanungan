<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'title', 
        'content', 
    ];


    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function departments() {
        return $this->belongsToMany(Department::class);
    }
}
