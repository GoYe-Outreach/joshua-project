<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Requests;

use GoYe\JoshuaProject\Requests\Request;
use GoYe\JoshuaProject\Resources\Country as Resource;

class Countries extends Request
{
    public function __invoke()
    {
        $response = $this->get()->json();

        return collect($response)->mapInto(Resource::class);
    }

    /**
     * {@inheritDoc}
     */
    protected function url(): string
    {
        return (string) parent::url().'countries.json';
    }
}
