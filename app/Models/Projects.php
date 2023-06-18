<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_title',
        'project_service_id',
        'project_company',
        'photo1',
        'photo2',
        'description'
    ];

    public $timestamps = false;
}
