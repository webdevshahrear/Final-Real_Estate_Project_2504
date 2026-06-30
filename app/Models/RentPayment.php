<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentPayment extends Model
{
    protected $fillable = [
        'tennant_id',
        'unit_id',
        'bill_month',
        'due_date',
        'rent_amount',
        'service_charge',
        'utility_charge',
        'total_amount',
        'status',
        'paid_at',
        'payment_method',
        'transaction_id',
    ];

    protected $casts = [
        'due_date' => 'date',
        'paid_at'  => 'datetime',
    ];

    public function tennant()
    {
        return $this->belongsTo(Tennant::class, 'tennant_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    /** Human-readable month label e.g. "August 2026" */
    public function monthLabel(): string
    {
        return \Carbon\Carbon::createFromFormat('Y-m', $this->bill_month)->format('F Y');
    }

    /** Is this bill overdue? */
    public function isOverdue(): bool
    {
        return $this->status === 'unpaid' && $this->due_date->isPast();
    }
}
