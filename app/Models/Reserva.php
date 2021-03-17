<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'reservaciones';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasHuesped()
    {
        return $this->belongsTo(Huesped::class);
    }

    public function hasHotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function hasPaypal()
    {
        return $this->belongsTo(PaypalPagos::class);
    }

    public function hasSantander()
    {
        return $this->belongsTo(SantanderPago::class);
    }
}
