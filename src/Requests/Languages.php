<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Requests;

use GoYe\JoshuaProject\Requests\Request;
use GoYe\JoshuaProject\Resources\Language as Resource;

class Languages extends Request
{
    protected $country;

    public function __invoke()
    {
        $response = $this->get()->json();

        return collect($response)
            ->mapInto(Resource::class);
    }

    public function country(string $code)
    {
        $this->country = $code;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    protected function url(): string
    {
        return (string) parent::url().'languages.json';
    }
}
