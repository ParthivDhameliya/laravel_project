<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student extends Controller {
    function data1() {
        $id = 12;
        $name = "ABC";
        return view('admin.student', ['name' => $name, 'id' => $id]);
    }
    function data2() {
        $id = 20;
        $name = "XYZ";
        return view('admin.student', ['name' => $name, 'id' => $id]);
    }
}
