<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Drink\StoreRequest;
use App\Http\Requests\Drink\UpdateRequest;
use App\Models\Drink;
use App\Services\Api\DrinkService;

class DrinkController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private DrinkService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve drinks', 500, $th->getMessage());
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
            return ApiResponse::error('Failed to create drink', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        try {
            return $this->service->show($drink);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve drink', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Drink $drink)
    {
        try {
            return $this->service->update($request->validated(), $drink);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update drink', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drink $drink)
    {
        try {
            return $this->service->destroy($drink);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete drink', 500, $th->getMessage());
        }
    }
}
