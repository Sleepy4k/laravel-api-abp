<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Currency;

class CurrencyService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $currencies = Currency::all();
        return ApiResponse::success($currencies, 'Currencies retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $currency = Currency::create($request);
        if ($currency) {
            return ApiResponse::success($currency, 'Currency created successfully', 201);
        }
        return ApiResponse::error('Failed to create currency', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency): mixed
    {
        return ApiResponse::success($currency, 'Currency retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Currency $currency): mixed
    {
        $updated = $currency->update($request);
        if ($updated) {
            return ApiResponse::success($currency, 'Currency updated successfully');
        }
        return ApiResponse::error('Failed to update currency', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency): mixed
    {
        $deleted = $currency->delete();
        if ($deleted) {
            return ApiResponse::success(null, 'Currency deleted successfully', 204);
        }
        return ApiResponse::error('Failed to delete currency', 500);
    }
}
