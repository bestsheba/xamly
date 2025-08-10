<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TGallery extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'image',
        'order',
    ];

    protected $casts = [
        'order' => 'integer'
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
