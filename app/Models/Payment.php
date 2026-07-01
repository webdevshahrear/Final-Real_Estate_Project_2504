<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = ['id'];

    public function tennant()
    {
        return $this->belongsTo(Tennant::class, 'tenant_id');
    }
}
