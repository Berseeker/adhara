<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Huesped extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'huespedes';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasPais()
    {
        return $this->belongsTo(Pais::class);
    }
}
