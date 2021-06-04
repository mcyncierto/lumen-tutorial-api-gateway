<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the books service.
     *
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    /**
     * Obtain the full list of books from the books service.
     *
     * @return string
     */
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }

    /**
     * Create one book using the books service.
     *
     * @param array $data
     *
     * @return string
     */
    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * Obtain single book from the books service.
     *
     * @param int $bookId
     *
     * @return string
     */
    public function obtainBook($bookId)
    {
        return $this->performRequest('GET', "/books/{$bookId}");
    }

    /**
     * Update an instance of book using books service.
     *
     * @param array $data
     * @param int   $bookId
     *
     * @return string
     */
    public function editBook($data, $bookId)
    {
        return $this->performRequest('PUT', "/books/{$bookId}", $data);
    }

    /**
     * Remove a single book using the books service.
     *
     * @param int $bookId
     *
     * @return string
     */
    public function deleteBook($bookId)
    {
        return $this->performRequest('DELETE', "/books/{$bookId}");
    }
}
