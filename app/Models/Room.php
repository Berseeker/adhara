<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'habitaciones';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasCategories()
    {
        return $this->belongsTo(CategoryRoom::class);
    }

    public function hasMealPlans()
    {
        return $this->belongsTo(RoomPlan::class);
    }

    public function hasHotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
