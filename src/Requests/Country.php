<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Requests;

use GoYe\JoshuaProject\Requests\Request;
use GoYe\JoshuaProject\Resources\Country as Resource;

class Country extends Request
{
    protected $country;

    public function __invoke()
    {
        $response = $this->get()->json();

        return collect($response)
            ->mapInto(Resource::class)
            ->first();
    }

    public function country(string $id)
    {
        $this->country = $id;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    protected function url(): string
    {
        return (string) parent::url().'countries/'.$this->country.'.json';
    }
}
