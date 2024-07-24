<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Requests;

use GoYe\JoshuaProject\Requests\Request;
use GoYe\JoshuaProject\Resources\Continent as Resource;

class Continent extends Request
{
    protected $continent;

    public function __invoke()
    {
        $response = $this->get()->json();

        return collect($response)->mapInto(Resource::class);
    }

    /**
     * Set the continent type.
     *
     * @param  string  $type
     * @return void
     */
    public function continent(string $id)
    {
        $this->continent = $id;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    protected function url(): string
    {
        return (string) parent::url().'continents/'.$this->continent.'.json';
    }
}
