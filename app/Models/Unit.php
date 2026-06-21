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
        'bedrooms',
        'bathrooms',
        'amount',
        'security_deposit',
        'details',
        'images',
        'status',
        'available_from',
        'pet_friendly',
        'is_furnished',
        'has_gym',
        'has_rooftop',
        'has_parking',
        'has_security',
        'has_generator',
        'has_ac',
        'has_free_maintenance',
    ];

    protected $casts = [
        'images'               => 'array',
        'pet_friendly'         => 'boolean',
        'is_furnished'         => 'boolean',
        'has_gym'              => 'boolean',
        'has_rooftop'          => 'boolean',
        'has_parking'          => 'boolean',
        'has_security'         => 'boolean',
        'has_generator'        => 'boolean',
        'has_ac'               => 'boolean',
        'has_free_maintenance' => 'boolean',
        'available_from'       => 'date',
        'bedrooms'             => 'integer',
        'bathrooms'            => 'integer',
    ];

    public function building()
    {
        return $this->belongsTo(Building::class);
    }
}
