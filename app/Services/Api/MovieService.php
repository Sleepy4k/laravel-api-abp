<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Movie;

class MovieService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $movies = Movie::all();
        return ApiResponse::success($movies, 'Movies retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $movie = Movie::create($request);
        if ($movie) {
            return ApiResponse::success($movie, 'Movie created successfully', 201);
        }
        return ApiResponse::error('Failed to create movie', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie): mixed
    {
        return ApiResponse::success($movie, 'Movie retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Movie $movie): mixed
    {
        $updated = $movie->update($request);
        if ($updated) {
            return ApiResponse::success($movie, 'Movie updated successfully');
        }
        return ApiResponse::error('Failed to update movie', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie): mixed
    {
        $deleted = $movie->delete();
        if ($deleted) {
            return ApiResponse::success(null, 'Movie deleted successfully', 204);
        }
        return ApiResponse::error('Failed to delete movie', 500);
    }
}
