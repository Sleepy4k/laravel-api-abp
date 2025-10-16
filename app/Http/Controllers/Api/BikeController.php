<?php

namespace App\Http\Controllers\Api;

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
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
