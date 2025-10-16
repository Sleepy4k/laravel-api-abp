<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Currency\StoreRequest;
use App\Http\Requests\Currency\UpdateRequest;
use App\Models\Currency;
use App\Services\Api\CurrencyService;

class CurrencyController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private CurrencyService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve currencies', 500, $th->getMessage());
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
            return ApiResponse::error('Failed to create currency', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        try {
            return $this->service->show($currency);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve currency', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Currency $currency)
    {
        try {
            return $this->service->update($request->validated(), $currency);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update currency', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        try {
            return $this->service->destroy($currency);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete currency', 500, $th->getMessage());
        }
    }
}
