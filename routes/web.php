<?php

use App\Http\Controllers\MealsController;
use App\Models\Meals;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth ;



// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('dashboard', [MealsController::class, 'index']) ;

Route::get('meals/{id}', [MealsController::class, 'show']) ;

Route::get('dashboard/addMeal',[MealsController::class, 'create']) ;

Route::post('dashboard/store', [MealsController::class, 'store']) ;

Route::get('edit/{id}', [MealsController::class, 'edit']) ;

Route::post('edit/update/{id}', [MealsController::class, 'update']) ;

Route::get('delete/{id}', [MealsController::class, 'destroy']) ;

Route::get('dashboard/search', [MealsController::class, 'search']) ;

Route::get('dashboard/meals', [MealsController::class, 'getApiData']) ;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

