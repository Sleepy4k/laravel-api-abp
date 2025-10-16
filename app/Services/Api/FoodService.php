<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Food;

class FoodService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $foods = Food::all();
        return ApiResponse::success($foods, 'Foods retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $food = Food::create($request);
        if ($food) {
            return ApiResponse::success($food, 'Food created successfully', 201);
        }
        return ApiResponse::error('Failed to create food', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food): mixed
    {
        return ApiResponse::success($food, 'Food retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Food $food): mixed
    {
        $food = $food->update($request);
        if ($food) {
            return ApiResponse::success($food, 'Food updated successfully');
        }
        return ApiResponse::error('Failed to update food', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food): mixed
    {
        $food = $food->delete();
        if ($food) {
            return ApiResponse::success('Food deleted successfully');
        }
        return ApiResponse::error('Failed to delete food', 500);
    }
}
