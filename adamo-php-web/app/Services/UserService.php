<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService{
    private UserRepository $repo;
    public function __construct(UserRepository $userRepository){
        $this->repo = $userRepository;
    }

    public function addUser(Array $user){
        return $this->repo->addUser($user);
    }
}
