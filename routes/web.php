<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('members',MemberController::class);
// Route::get('members',[MemberController::class,'create']);
// Route::post('members/store',[MemberController::class,'store']);
