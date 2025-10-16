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
        return ApiResponse::success('Cars retrieved successfully', $cars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $car = Car::create($request);
        if ($car) {
            return ApiResponse::success('Car created successfully', $car, 201);
        }
        return ApiResponse::error('Failed to create car', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car): mixed
    {
        return ApiResponse::success('Car retrieved successfully', $car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Car $car): mixed
    {
        $car = $car->update($request);
        if ($car) {
            return ApiResponse::success('Car updated successfully', $car);
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
            return ApiResponse::success('Car deleted successfully');
        }
        return ApiResponse::error('Failed to delete car', 500);
    }
}
