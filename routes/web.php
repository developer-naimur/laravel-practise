<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationshipsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/relationship/one-to-one', [RelationshipsController::class, 'one_to_one_relationship']);
Route::get('/relationship/one-to-many', [RelationshipsController::class, 'one_to_many_relationship']);
Route::get('/relationship/many-to-many', [RelationshipsController::class, 'many_to_many_relationship']);