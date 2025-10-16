<?php

namespace App\Services\Api;

use App\Facades\ApiResponse;
use App\Foundations\Service;
use App\Models\Book;

class BookService extends Service
{
    /**
     * Display a listing of the resource.
     */
    public function index(): mixed
    {
        $books = Book::all();
        return ApiResponse::success($books, 'Books retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $request): mixed
    {
        $book = Book::create($request);
        if ($book) {
            return ApiResponse::success($book, 'Book created successfully', 201);
        }
        return ApiResponse::error('Failed to create book', 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): mixed
    {
        return ApiResponse::success($book, 'Book retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(array $request, Book $book): mixed
    {
        $updated = $book->update($request);
        if ($updated) {
            return ApiResponse::success($book, 'Book updated successfully');
        }
        return ApiResponse::error('Failed to update book', 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): mixed
    {
        $deleted = $book->delete();
        if ($deleted) {
            return ApiResponse::success(null, 'Book deleted successfully', 204);
        }
        return ApiResponse::error('Failed to delete book', 500);
    }
}
