<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'price',
        'height',
        'category',
        'light',
        'description',
        'avg_rate'
    ];
}
