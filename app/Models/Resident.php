<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
        'email', 
        'phone',
        
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
