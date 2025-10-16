<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Drink;

class DrinkService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $drinks = Drink::all();
        return ApiResponse::success($drinks, 'Drinks retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $drink = Drink::create($request);
        if ($drink) {
            return ApiResponse::success($drink, 'Drink created successfully', 201);
        }
        return ApiResponse::error('Failed to create drink', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink): mixed
    {
        return ApiResponse::success($drink, 'Drink retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Drink $drink): mixed
    {
        $updated = $drink->update($request);
        if ($updated) {
            return ApiResponse::success($drink, 'Drink updated successfully');
        }
        return ApiResponse::error('Failed to update drink', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink): mixed
    {
        $deleted = $drink->delete();
        if ($deleted) {
            return ApiResponse::success(null, 'Drink deleted successfully', 204);
        }
        return ApiResponse::error('Failed to delete drink', 500);
    }
}
