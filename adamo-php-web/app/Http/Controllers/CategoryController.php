<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    private CategoryService $service;

    public function __construct(CategoryService $service) {
        $this->service = $service;
    }

    public function getParentCategories(){
        dd($this->service->getParentCategories());
    }
}
