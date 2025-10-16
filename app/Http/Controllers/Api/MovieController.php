<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Movie\StoreRequest;
use App\Http\Requests\Movie\UpdateRequest;
use App\Models\Movie;
use App\Services\Api\MovieService;

class MovieController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private MovieService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve movies', 500, $th->getMessage());
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
            return ApiResponse::error('Failed to create movie', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        try {
            return $this->service->show($movie);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve movie', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Movie $movie)
    {
        try {
            return $this->service->update($request->validated(), $movie);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update movie', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        try {
            return $this->service->destroy($movie);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete movie', 500, $th->getMessage());
        }
    }
}
