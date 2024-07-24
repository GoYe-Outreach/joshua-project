<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Requests;

use Illuminate\Support\Facades\Http;

abstract class Request
{
    public function __construct(protected array $params = [])
    {
        $this->setParam('api_key', config('services.joshuaproject.token'));
    }

    /**
     * Get the URL for the request.
     */
    protected function url(): string
    {
        return sprintf('%s/v%s/', config('services.joshuaproject.endpoint'), config('services.joshuaproject.version'));
    }

    public function setParam(string $key, string $value): self
    {
        $this->params = array_merge($this->params, [
            $key => $value,
        ]);

        return $this;
    }

    /**
     * Get the headers for the request.
     */
    protected function headers(): array
    {
        return [
            'Content-Type' => 'text/json; charset=UTF8',
        ];
    }

    /**
     * Send the request to get back the response.
     */
    protected function get()
    {
        return Http::get($this->url(), $this->params);
    }

    /**
     * Forward calls for run to the invokable method.
     *
     *
     * @return mixed
     */
    public function run(?array $arguments = null)
    {
        return $this->__invoke($arguments); // @phpstan-ignore-line
    }
}
