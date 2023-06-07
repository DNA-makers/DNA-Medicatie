<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gen;

class GenController extends Controller
{
    //
    public function gen() {
        $gen = Gen::all();
        return $gen;
    }

    public function gen_specific($id) {
        $gen = Gen::where('id', $id)->first();
        return $gen;
    }
}
