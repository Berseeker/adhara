<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'hoteles';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasFeatures()
    {
        return $this->hasMany(FeaturesHotel::class);
    }
}
