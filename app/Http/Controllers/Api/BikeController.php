<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Bike\StoreRequest;
use App\Http\Requests\Bike\UpdateRequest;
use App\Models\Bike;
use App\Services\Api\BikeService;

class BikeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private BikeService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve bikes', 500, $th->getMessage());
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
            return ApiResponse::error('Failed to create bike', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bike $bike)
    {
        try {
            return $this->service->show($bike);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve bike', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Bike $bike)
    {
        try {
            return $this->service->update($request->validated(), $bike);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update bike', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike)
    {
        try {
            return $this->service->destroy($bike);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete bike', 500, $th->getMessage());
        }
    }
}
