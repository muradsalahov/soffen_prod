<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_bg',
        'photo_about',
        'name',
        'description'
    ];

    public $timestamps = false;
}
