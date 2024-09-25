<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


// Route::get('/getToken', function (Request $request) {

//     $token = $request->user()->createToken($request->token_name);

//     // Return the plain text token
//     return response()->json(['token' => $token->plainTextToken]);
//     // return 'hmmm';
// });



// Route::get('/user', function (Request $request) {

//     return 'THis is user route';

// })->middleware('auth:sanctum');


// Route::post("/postEmployee", [EmployeeController::class,"addEmployee"])->middleware('auth:sanctum');