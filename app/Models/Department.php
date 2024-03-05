<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'department_id'; 
    public $incrementing = false; 

    protected $fillable = ['name', 'department_id'];

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    public function announcements() {
        return $this->belongsToMany(Announcement::class, 'announcement_department', 'department_id', 'announcement_id');
    }
}
