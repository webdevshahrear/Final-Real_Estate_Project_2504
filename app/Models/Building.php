<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "user_id",
        "name",
        "address",
        "city",
        "total_floors",
        "building_type",
        "amenities",
        "images",
        "status",
    ];
}
