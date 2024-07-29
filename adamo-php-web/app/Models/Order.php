<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total',
        'paid',
        'status'
    ];

    public function products(){
        return $this->belongsToMany(Product::class,"OrderItems","order_id","product_id");
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
