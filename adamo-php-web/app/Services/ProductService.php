<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService{
    private ProductRepository $repo;
    public function __construct(ProductRepository $productRepository){
        $this->repo = $productRepository;
    }
    public function getProducts(){
        return $this->repo->getProducts();
    }
}
