<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'transfers';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasPaquete()
    {
        return $this->belongsTo(PaqueteTransfer::class);
    }
}
