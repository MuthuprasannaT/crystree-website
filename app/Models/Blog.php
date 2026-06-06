<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'featured_image',
        'short_description',
        'content',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
