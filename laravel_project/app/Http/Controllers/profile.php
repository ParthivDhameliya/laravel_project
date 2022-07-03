<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller {
    function show() {
        return view('about');
    }
}
