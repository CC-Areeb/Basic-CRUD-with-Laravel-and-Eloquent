<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

// When defining routes like this, it has to be in array form ---> []
// Route::get/post('end-point', [SampleController::class, 'example_class']);




// when defining a resource route, it should not be in an array from 
Route::resource('/cars', CarsController::class);


// restoring soft deletes
Route::get('/cars/restore/{id}', [CarsController::class, 'restore']);
