<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_logo',
        'home_text1',
        'home_text2',
        'description',
        'phone_number1',
        'phone_number2',
        'email1',
        'email2',
        'adress_name',
        'adress_pin',
        'facebook',
        'instagram',
        'linkedin'
    ];

    public $timestamps = false;
}
