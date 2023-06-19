<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advise;

class AdviseController extends Controller
{
    public function advise($gen_code) {
        $advise = Advise::where('gen_code', $gen_code)->get();
        return $advise;
    }

    public function all_advise() {
        $advise = Advise::all();
        return $advise;
    }

}
