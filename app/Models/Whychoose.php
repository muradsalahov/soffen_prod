<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whychoose extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo1',
        'photo2',
        'photo3',
        'years',
        'name',
        'description'
    ];

    public $timestamps = false;
}
