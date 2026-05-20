<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'building_id',
        'floor',
        'unit_num',
        'sq_size',
        'unit_type',
        'amount',
        'security_deposit',
        'details',
        'images',
        'status',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
