<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function discount(){
        return $this->belongsTo(Discount::class);
    }

    public function productAttributes(){
        return $this->hasMany(ProductAttribute::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class,"OderItems","product_id","order_id");
    }

    public function getProducts(){
        return $this->with('productAttributes')->get();
    }
}
