<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    protected $fillable = [
        'career_id',
        'position',
        'name',
        'email',
        'mobile',
        'description',
        'resume'
    ];
}
