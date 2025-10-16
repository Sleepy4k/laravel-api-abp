<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Bike;

class BikeService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $bikes = Bike::all();
        return ApiResponse::success($bikes, 'Bikes retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $bike = Bike::create($request);
        if ($bike) {
            return ApiResponse::success($bike, 'Bike created successfully', 201);
        }
        return ApiResponse::error('Failed to create bike', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bike $bike): mixed
    {
        return ApiResponse::success($bike, 'Bike retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Bike $bike): mixed
    {
        $updated = $bike->update($request);
        if ($updated) {
            return ApiResponse::success($bike, 'Bike updated successfully');
        }
        return ApiResponse::error('Failed to update bike', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike): mixed
    {
        $deleted = $bike->delete();
        if ($deleted) {
            return ApiResponse::success(null, 'Bike deleted successfully', 204);
        }
        return ApiResponse::error('Failed to delete bike', 500);
    }
}
