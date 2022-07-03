<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class single extends Controller {
    public function __invoke(Request $request) {
        $id = 30;
        $name = "parthiv";
        return view('admin.student', ['name' => $name, 'id' => $id]);
    }
}
