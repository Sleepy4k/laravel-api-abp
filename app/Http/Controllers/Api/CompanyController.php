<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Company\StoreRequest;
use App\Http\Requests\Company\UpdateRequest;
use App\Models\Company;
use App\Services\Api\CompanyService;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private CompanyService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve companies', 500, $th->getMessage());
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
            return ApiResponse::error('Failed to create company', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        try {
            return $this->service->show($company);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve company', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Company $company)
    {
        try {
            return $this->service->update($request->validated(), $company);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update company', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        try {
            return $this->service->destroy($company);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete company', 500, $th->getMessage());
        }
    }
}
