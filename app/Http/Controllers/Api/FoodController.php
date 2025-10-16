<?php

namespace App\Http\Controllers\Api;

use App\Foundations\Controller;
use App\Http\Requests\Food\StoreRequest;
use App\Http\Requests\Food\UpdateRequest;
use App\Services\Api\FoodService;

class FoodController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private FoodService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
