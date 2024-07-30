<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository{
    private Product $product;

    public function __construct(Product $product){
        $this->product = $product;
    }

    public function getProducts(){
        return $this->product->getProducts();
    }
}
