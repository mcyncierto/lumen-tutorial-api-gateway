<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to consume the authors service.
     *
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * Obtain the full list of authors from the author service.
     *
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    /**
     * Create one author using the author service.
     *
     * @param array $data
     *
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    /**
     * Obtain single author from the author service.
     *
     * @param int $authorId
     *
     * @return string
     */
    public function obtainAuthor($authorId)
    {
        return $this->performRequest('GET', "/authors/{$authorId}");
    }

    /**
     * Update an instance of author using the author service.
     *
     * @param array $data
     * @param int   $authorId
     *
     * @return string
     */
    public function editAuthor($data, $authorId)
    {
        return $this->performRequest('PUT', "/authors/{$authorId}", $data);
    }

    /**
     * Remove a single author using the author service.
     *
     * @return string
     */
    public function deleteAuthor($authorId)
    {
        return $this->performRequest('DELETE', "/authors/{$authorId}");
    }
}
