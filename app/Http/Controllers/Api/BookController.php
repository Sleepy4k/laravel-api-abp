<?php

namespace App\Http\Controllers\Api;

use App\Facades\ApiResponse;
use App\Foundations\Controller;
use App\Http\Requests\Book\StoreRequest;
use App\Http\Requests\Book\UpdateRequest;
use App\Models\Book;
use App\Services\Api\BookService;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(private BookService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return $this->service->index();
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve books', 500, $th->getMessage());
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
            return ApiResponse::error('Failed to create book', 500, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        try {
            return $this->service->show($book);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to retrieve book', 500, $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Book $book)
    {
        try {
            return $this->service->update($request->validated(), $book);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to update book', 500, $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        try {
            return $this->service->destroy($book);
        } catch (\Throwable $th) {
            return ApiResponse::error('Failed to delete book', 500, $th->getMessage());
        }
    }
}
