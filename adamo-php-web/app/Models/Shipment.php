<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', // do type instead of distance because can't calculate the distance from the address :) and also decided not to use 3rd party shipping
        'cost'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
