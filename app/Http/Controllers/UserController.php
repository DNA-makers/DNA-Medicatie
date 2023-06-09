<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User() {
        $user = User::all();
        return $user;
    }

    public function user_specific($id) {
        $user = User::where('id', $id)->first();
        return $user;
    }
}
