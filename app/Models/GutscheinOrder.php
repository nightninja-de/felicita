<?php

namespace App\Models;

use BeyondCode\Vouchers\Traits\HasVouchers;
use Illuminate\Database\Eloquent\Model;

class GutscheinOrder extends Model
{
    use HasVouchers;

    protected $fillable = [
        'name',
        'email',
        'amount',
        'currency',
        'status',
        'stripe_session_id',
        'paid_at',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'paid_at' => 'datetime',
    ];
}
