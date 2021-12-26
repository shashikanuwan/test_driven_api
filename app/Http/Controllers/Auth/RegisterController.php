<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        return $user =  User::create($request->validated());
    }
}