<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'Logged in succesfully'], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 400);
        }
    }
}
