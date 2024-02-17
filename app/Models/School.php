<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $primaryKey = 'school_id'; 
    public $incrementing = false; 
    protected $fillable = 
    [
        'school_id',
        'name',
        'address',
        'about',
        'logo'
    ];
}
