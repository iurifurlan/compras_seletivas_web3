<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CollectivePurchase extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantity', 'purchase_date', 'payment_status'];

    protected $casts = [
        'purchase_date' => 'date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
