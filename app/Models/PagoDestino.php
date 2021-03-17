<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PagoDestino extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'pago_x_destino';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
