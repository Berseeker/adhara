<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FeaturesHotel extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'amenidades_hotel';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
