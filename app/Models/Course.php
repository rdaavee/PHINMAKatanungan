<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id'; 
    public $incrementing = false; 

    protected $fillable = ['name', 'course_id', 'department_id'];
}
