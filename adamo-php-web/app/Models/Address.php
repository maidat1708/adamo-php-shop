<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        // 'country' = VN :)
        'city',
        'district',
        'town',
        'street',
    ];

    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
