<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Company;

class CompanyService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $company = Company::all();
        return ApiResponse::success($company, 'Companies retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $company = Company::create($request);
        if ($company) {
            return ApiResponse::success($company, 'Company created successfully', 201);
        }
        return ApiResponse::error('Failed to create company', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company): mixed
    {
        return ApiResponse::success($company, 'Company retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Company $company): mixed
    {
        $updated = $company->update($request);
        if ($updated) {
            return ApiResponse::success($company, 'Company updated successfully');
        }
        return ApiResponse::error('Failed to update company', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company): mixed
    {
        $deleted = $company->delete();
        if ($deleted) {
            return ApiResponse::success(null, 'Company deleted successfully', 204);
        }
        return ApiResponse::error('Failed to delete company', 500);
    }
}
