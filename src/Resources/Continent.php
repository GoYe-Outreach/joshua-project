<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Resources;

use Illuminate\Support\Arr;

/**
 * Continent Resource
 *
 * @property string $code ISO Standard
 * @property string $name of the continent
 * @property int $countries contained in the continent
 * @property int $people_groups in continent
 * @property int $unreached_people_groups in continent
 * @property int $population
 * @property int $percent_unreached_people_groups
 * @property int $unreached_population
 * @property int $percent_unreached_population
 */
class Continent extends Resource
{
    /**
     * Instantiate the model from JSON
     *
     * @param  array  $attributes
     * @return Continent
     */
    public function __construct(array $attributes)
    {
        $this->code = Arr::get($attributes, '0.ROG2');
        $this->name = Arr::get($attributes, '0.Continent');
        $this->countries = Arr::get($attributes, '0.NbrCountries');
        $this->people_groups = Arr::get($attributes, '0.NbrPGIC');
        $this->unreached_people_groups = Arr::get($attributes, '0.NbrLR');
        $this->population = Arr::get($attributes, '0.SumContinent');
        $this->percent_unreached_people_groups = Arr::get($attributes, '0.PercentLR');
        $this->unreached_population = Arr::get($attributes, '0.SumContinentLR');
        $this->percent_unreached_population = Arr::get($attributes, '0.PercentPoplLR');
    }
}
