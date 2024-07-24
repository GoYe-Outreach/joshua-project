<?php

namespace GoYe\JoshuaProject\Exceptions;

use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;

class BadResponse extends TransferException
{
    /**
     * The bad response.
     *
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected $response;

    /**
     * Create the exception.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $code = ! $response instanceof PromiseInterface ? $response->getStatusCode() : 400;

        parent::__construct($response->getBody(), $code);

        $this->response = $response;
    }

    /**
     * Get the bad response.
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }
}
