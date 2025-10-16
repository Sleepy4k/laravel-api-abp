<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;
use App\Services\Api\CarService;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private CarService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve cars', 500, $th->getMessage());
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
            return ApiResponse::error('Failed to create car', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        try {
            return $this->service->show($car);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve car', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Car $car)
    {
        try {
            return $this->service->update($request->validated(), $car);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update car', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        try {
            return $this->service->destroy($car);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete car', 500, $th->getMessage());
        }
    }
}
