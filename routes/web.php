<?php

use App\Http\Controllers\DummyAPI;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getToken', function(Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();


    return  $token;
});

Route::get("/dummyData", [DummyAPI::class,"getData"]);
Route::post("/postEmployee", [EmployeeController::class,"addEmployee"]);
Route::post("/postListDataAPI" , [EmployeeController::class,"addEmployees"]);

Route::put("/putEmpAPI", [EmployeeController::class,"updateEmployee"]);

Route::delete("/deleteEmp/{id}", [EmployeeController::class,"deleteEmployee"]);

Route::get("/searchEmp/{name}", [EmployeeController::class,"searchEmployee"]);

Route::post("/validatedPostEmp", [EmployeeController::class,"validateDataPost"]);
