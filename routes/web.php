<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Apartament;
use App\Models\User;
use App\Models\Feature; 
use App\Models\ApartamentFeature;
use App\Models\Landlord;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//approve
Route::get('/approve/{id}', function ($id) {
    return view('approve')->with('id', $id);;
});



