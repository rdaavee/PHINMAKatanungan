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
}
