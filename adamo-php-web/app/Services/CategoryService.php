<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService{
    private CategoryRepository $repo;
    public function __construct(CategoryRepository $categoryRepository){
        $this->repo = $categoryRepository;
    }
    public function getParentCategories(){
        return $this->repo->getParentCategories();
    }
}
