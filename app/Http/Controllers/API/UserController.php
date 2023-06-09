<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    public function allusers () {
        return new UserCollection (User::all());
    }
}