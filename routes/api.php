<?php

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Route
|--------------------------------------------------------------------------
|
| You can list public endpoint for any user in here. These routes are not guarded
| by any authentication system. In other words, any user can access it directly.
| Remember not to list anything of importance, use authenticate route instead.
*/

Route::any('/', Api\RootController::class);

Route::prefix('core')->group(function () {
    Route::apiResources([
        'bikes' => Api\BikeController::class,
        'books' => Api\BookController::class,
        'cars' => Api\CarController::class,
        'companies' => Api\CompanyController::class,
        'currencies' => Api\CurrencyController::class,
        'drinks' => Api\DrinkController::class,
        'foods' => Api\FoodController::class,
        'movies' => Api\MovieController::class,
    ]);
});
