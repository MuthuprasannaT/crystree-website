<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'careers';

    protected $fillable = [
        'job_title',
        'department',
        'location',
        'job_type',
        'experience',
        'salary',
        'description',
        'status'
    ];
}
