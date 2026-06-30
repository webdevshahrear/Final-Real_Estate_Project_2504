<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewingRequest extends Model
{
    protected $fillable = [
        'unit_id',
        'name',
        'phone',
        'preferred_move_in_date',
        'status',
        'tennant_id',
    ];

    protected $casts = [
        'preferred_move_in_date' => 'date',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function tennant()
    {
        return $this->belongsTo(Tennant::class, 'tennant_id');
    }
}
