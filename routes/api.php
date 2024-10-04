<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/tokens/yaratish", function (Request $request) {
   $user =  \App\Models\User::query()->create( [
        'name'=>'nurullayev',
        'email'=>'nurullayevvv@.com',
        'password'=>bcrypt('1234')
    ]);
   $token = $user ->createToken('auth_token')->plainTextToken;

    return response()->json([
        'token' =>$token
    ]);
});
