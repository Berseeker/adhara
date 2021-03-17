<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PaqueteTransfer extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'paquetes_transfers';

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
