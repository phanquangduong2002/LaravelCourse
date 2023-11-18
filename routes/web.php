<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

// Route::get('/products', [
//     ProductsController::class,
//     'index' // index function of ProductsController
// ]);

// // how to validate "id only integer"
// Route::get('/products/{id}', [
//     ProductsController::class,
//     'detail' // index function of ProductsController
// ])->where('id', '[0-9]');


Route::get("/", [
    PagesController::class,
    'index'
]);

Route::get("/about", [
    PagesController::class,
    'about'
]);


// Route::get('/users', function () {
//     return "This is the users page";
// });

// Route::get("/fruits", function () {
//     return ['orange', 'apple', 'pinapple', 'lemon', 'banana'];
// });

// Route::get('/about', function () {
//     return response()->json([
//         'name' => 'Phan Quang Dương',
//         'email' => 'phanquangduong2002@gmail.com',
//         'age' => 21
//     ]);
// });

// // response another request = redirect
// Route::get("/something", function () {
//     return redirect(('/'));
// });
