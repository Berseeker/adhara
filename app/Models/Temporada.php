<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'temporadas';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
