<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class UserRepository{
    private User $user;
    public function __construct(User $user){
        $this->user = $user;
    }

    public function login(Request $request){

    }
    public function addUser(Array $user){
        return $this->user->addUser($user);
    }
}
