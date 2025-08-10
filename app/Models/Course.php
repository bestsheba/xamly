<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   use HasFactory;

    protected $fillable = [
        'name',
        'exam',
        'notes',
        'feature',
        'description',
    ];

    protected $casts = [
        'exam' => 'integer',
        'notes' => 'integer',
        'feature' => 'integer',
    ];
}
