<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Resources;

use Illuminate\Support\Arr;

/**
 * Unreached of the Day Resource
 *
 * @property string $people
 * @property string $country
 * @property int $population
 * @property int $globalPopulation
 * @property string $language
 * @property string $religion
 * @property int $evangelical
 */
class Unreached extends Resource
{
    /**
     * Instantiate the resource
     *
     * @param  array  $attributes
     * @return Unreached
     */
    public function __construct(array $attributes)
    {
        $this->people = Arr::get($attributes, 'PeopNameInCountry');
        $this->country = Arr::get($attributes, 'Ctry');
        $this->population = Arr::get($attributes, 'Population');
        $this->globalPopulation = Arr::get($attributes, 'PopulationPGAC');
        $this->language = Arr::get($attributes, 'PrimaryLanguageName');
        $this->religion = Arr::get($attributes, 'PrimaryReligion');
        $this->evangelical = Arr::get($attributes, 'PercentEvangelical');
    }
}
