<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_id',
        'status',
        'amount_paid',
    ];

    protected $casts = [
        'amount_paid' => 'decimal:2',
    ]

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
