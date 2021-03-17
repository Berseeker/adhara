<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SantaderPago extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'santander_pagos';

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function hasHotel()
    {
        return $this->belongsTo(Hotel::class);
        
    }

    public function hasRequest()
    {
        return $this->belongsTo(SantanderRequest::class);
    }

    public function hasResponse()
    {
        return $this->belongsTo(SantanderResponse::class);
    }
}
