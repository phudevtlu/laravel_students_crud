<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('/students/create', [App\Http\Controllers\StudentController::class, 'store']);

Route::get('/students', [App\Http\Controllers\StudentController::class, 'get_all_students']);
Route::get('/students/update/{id}', [App\Http\Controllers\StudentController::class, 'get_student_by_id']);
Route::post('/students/update/{id}', [App\Http\Controllers\StudentController::class, 'edit']);

Route::get('students/delete/{id}', [App\Http\Controllers\StudentController::class, 'destroy']);