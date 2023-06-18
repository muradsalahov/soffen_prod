<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceHeaderPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_photo'
    ];

    public $timestamps = false;
}
