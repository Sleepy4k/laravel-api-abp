<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Car;

class CarService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $cars = Car::all();
        return ApiResponse::success($cars, 'Cars retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $car = Car::create($request);
        if ($car) {
            return ApiResponse::success($car, 'Car created successfully', 201);
        }
        return ApiResponse::error('Failed to create car', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car): mixed
    {
        return ApiResponse::success($car, 'Car retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Car $car): mixed
    {
        $car = $car->update($request);
        if ($car) {
            return ApiResponse::success($car, 'Car updated successfully');
        }
        return ApiResponse::error('Failed to update car', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car): mixed
    {
        $car = $car->delete();
        if ($car) {
            return ApiResponse::success(null, 'Car deleted successfully', 204);
        }
        return ApiResponse::error('Failed to delete car', 500);
    }
}
