<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'department',
        'status'
    ];

    public function departments() {
        return $this->belongsToMany(Department::class, 'announcement_department', 'announcement_id', 'department_id');
    }

    
}
