<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'amount',
        'amount_return',
        'payment_method',
        'payment_date',
        'payment_status',
        'transaction_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
    
    protected static function boot()
    {
        parent::boot();

        // Generate a unique transaction ID on creation
        static::creating(function ($model) {
            $model->transaction_id = self::generateTransactionId();
        });
    }

    private static function generateTransactionId()
    {
        $timestamp = now()->timestamp; // Get current timestamp
        $randomString = Str::random(16); // Generate a random string
        return 'txn_' . $timestamp . '_' . $randomString; // Concatenate timestamp and random string
    }
}
