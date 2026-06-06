<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Bts extends Model
{
    use SoftDeletes;

    protected $table = 'bts';

    protected $fillable = [
        'title',
        'image',
        'description',
    ];
}
