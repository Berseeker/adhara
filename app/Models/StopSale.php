<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class StopSale extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'stop_sales';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasHotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
