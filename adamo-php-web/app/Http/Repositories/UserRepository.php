<?php

namespace App\Http\Repositories;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class UserRepository{
    private User $user;
    public function __construct(User $user){
        $this->user = $user;
    }

    public function login(Request $request){

    }
}
