<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Resources;

use Illuminate\Support\Arr;

/**
 * Language Resource
 *
 * @property string $name
 * @property string $status
 * @property string $country code
 * @property int $percent_evangelical
 * @property int $people_groups
 * @property int $countries
 */
class Language extends Resource
{
    public function __construct(array $attributes)
    {
        $this->name = Arr::get($attributes, 'Language');
        $this->status = Arr::get($attributes, 'Status');
        $this->country = Arr::get($attributes, 'HubCountry');
        $this->percent_evangelical = Arr::get($attributes, 'PercentEvangelical');
        $this->people_groups = Arr::get($attributes, 'NbrPGICs');
        $this->countries = Arr::get($attributes, 'NbrCountries');
    }
}
