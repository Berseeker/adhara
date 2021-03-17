<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'grupos';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasHotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function hasRoom()
    {
        return $this->belongsTo(Room::class);
    }
}
