<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [

        'title',
        'keywords',
        'description',  
        'icon',
        'company',
        'address',
        'phone',
        'fax',
        'email',

        'smtp_server',
        'smtp_email',
        'smtp_password',
        'smtp_port',

        'facebook',
        'instagram',
        'twitter',
        'youtube',

        'about_us',
        'contact',
        'references',

        'status'

    ];
}