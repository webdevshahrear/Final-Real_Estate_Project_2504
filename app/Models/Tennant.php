<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tennant extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'status',
        'unit_id',
        'remember_token',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
    ];

    /** Check if tenant is approved by admin */
    public function isApproved(): bool
    {
        return $this->status === 'approved';
    }

    /** Check if tenant is pending approval */
    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    /** The unit assigned to this tenant */
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    /** All monthly rent payment records */
    public function rentPayments()
    {
        return $this->hasMany(RentPayment::class, 'tennant_id');
    }

    /** Current month unpaid bill */
    public function currentBill()
    {
        return $this->rentPayments()
                    ->where('status', 'unpaid')
                    ->orderBy('due_date')
                    ->first();
    }
}

