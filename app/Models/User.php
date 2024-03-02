<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'user_id',
        'account_status',
        'user_role',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'email',
        'password',
        'year_level',
        'course_id',
        'department_id',
        'school_id',
    ];

    protected $primaryKey = 'user_id';
    public $incrementing = false;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'user_id');
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
