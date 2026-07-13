<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteVisitor extends Model
{
    protected $table = 'website_visitors';

    protected $fillable = [
        'visitor_id',
        'ip_address',
        'browser',
        'device',
        'platform',
        'language',
        'screen_resolution',
        'timezone',
        'country',
        'city',
        'page_url',
        'referrer',
        'cookie_status',
    ];
}
