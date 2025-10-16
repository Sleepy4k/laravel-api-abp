<?php

namespace App\Services\Api;

use App\Foundations\Service;

class MovieService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): array
    {
        return [];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): bool
    {
        return false;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): array
    {
        return [];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, int $id): bool
    {
        return false;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): bool
    {
        return false;
    }
}
