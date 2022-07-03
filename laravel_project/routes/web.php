<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile;
use App\Http\Controllers\Student;
use App\Http\Controllers\Single;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('about', 'about');
Route::view('home', 'Home')->middleware('construction');
Route::view('contact', 'Contact');

// Route::get('user/{id}', function ($id) {
//     return view('first', ['id' => $id]);
// });

// Route::get('user/{id}/name/{name}', function ($id, $name) {
//     return view('admin.student', ['name' => $name, 'id' => $id]);
// });

// Route::get('name/{p_name?}', function ($name= "Mobile") {
//     return view('product', ['product' => $name]);
// })->where('p_name', '[A-Za-z]+'); 

// Route::get('name/{id}/{name}', function ($id, $name) {
//     return view('admin.student', ['name' => $name, 'id' => $id]);
// })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']); 

// Route::view('login', 'login');
// Route::view('register', 'register');
// Route::redirect('login', 'register');   

// Route::get('profile', [profile::class, 'show']);

// Route::get('single', single::class);
// Route::get('student1', [student::class, 'data1']);
// Route::get('student2', [student::class, 'data2']);

// Route::permanentRedirect('login', 'register');

Route::fallback(function () {
    return view('default');
});