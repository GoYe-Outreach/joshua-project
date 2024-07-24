<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Resources;

use Illuminate\Support\Arr;

/**
 * People Group Resource
 */
class Group extends Resource
{
    public function __construct(array $attributes)
    {
        dd($attributes);

        $this->name = Arr::get($attributes, 'Language');
        $this->status = Arr::get($attributes, 'Status');
        $this->country = Arr::get($attributes, 'HubCountry');
        $this->percent_evangelical = Arr::get($attributes, 'PercentEvangelical');
        $this->people_groups = Arr::get($attributes, 'NbrPGICs');
        $this->countries = Arr::get($attributes, 'NbrCountries');
    }
}
