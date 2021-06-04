<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books microservice.
     *
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return the list of books.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());
    }

    /**
     * Create one new book.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->successResponse($this->bookService->createBook($request->all()));
    }

    /**
     * Obtain and show one book.
     *
     * @return Illuminate\Http\Response
     */
    public function show($bookId)
    {
        return $this->successResponse($this->bookService->obtainBook($bookId));
    }

    /**
     * Update an existing book.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $bookId)
    {
        return $this->successResponse($this->bookService->editBook($request->all(), $bookId));
    }

    /**
     * Remove an existing book.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($bookId)
    {
        return $this->successResponse($this->bookService->deleteBook($bookId));
    }
}
