<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Food\StoreRequest;
use App\Http\Requests\Food\UpdateRequest;
use App\Models\Food;
use App\Services\Api\FoodService;

class FoodController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private FoodService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve foods', 500, $th->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        try {
            return $this->service->store($request->validated());
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to create food', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        try {
            return $this->service->show($food);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve food', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Food $food)
    {
        try {
            return $this->service->update($request->validated(), $food);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update food', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        try {
            return $this->service->destroy($food);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete food', 500, $th->getMessage());
        }
    }
}
