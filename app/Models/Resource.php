<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'type',
        'category',
        'icon',
        'status',
    ];
}