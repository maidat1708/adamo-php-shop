<?php

namespace App\Http\Service;

use App\Http\Repositories\UserRepository;

class UserService{
    private UserRepository $repo;
    public function __construct(UserRepository $userRepository){
        $this->repo = $userRepository;
    }
}
