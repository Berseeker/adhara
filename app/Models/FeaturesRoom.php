<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FeaturesRoom extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'amenidades_cuarto';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
