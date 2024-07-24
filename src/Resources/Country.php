<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Resources;

use Illuminate\Support\Arr;

/**
 * Country Resource
 *
 * @property int $progress
 * @property string $name
 * @property int $buddhism
 * @property int $christianity
 * @property int $ethnic_religions
 * @property int $evangelical
 * @property int $hinduism
 * @property int $islam
 * @property int $no_religion
 * @property int $other_religions
 * @property int $unknown_religion
 * @property string $primary_religion
 * @property string $code
 * @property string $region
 * @property string $capital
 * @property int $population
 * @property int $people_groups
 * @property int $people_groups_unreached
 * @property int $population_unreached
 */
class Country extends Resource
{
    public function __construct(array $attributes)
    {
        $this->progress = Arr::get($attributes, 'JPScaleCtry');
        $this->name = Arr::get($attributes, 'Ctry');
        $this->buddhism = Arr::get($attributes, 'PercentBuddhism');
        $this->christianity = Arr::get($attributes, 'PercentChristianity');
        $this->ethnic_religions = Arr::get($attributes, 'PercentEthnicReligions');
        $this->evangelical = Arr::get($attributes, 'PercentEvangelical');
        $this->hinduism = Arr::get($attributes, 'PercentHinduism');
        $this->islam = Arr::get($attributes, 'PercentIslam');
        $this->no_religion = Arr::get($attributes, 'PercentNonReligious');
        $this->other_religions = Arr::get($attributes, 'PercentOtherSmall');
        $this->unknown_religion = Arr::get($attributes, 'PercentUnknown');
        $this->primary_religion = Arr::get($attributes, 'ReligionPrimary');
        $this->code = Arr::get($attributes, 'ROG3');
        $this->region = Arr::get($attributes, 'RegionName');
        $this->capital = Arr::get($attributes, 'Capital');
        $this->population = Arr::get($attributes, 'Population');
        $this->people_groups = Arr::get($attributes, 'CntPeoples');
        $this->people_groups_unreached = Arr::get($attributes, 'CntPeoplesLR');
        $this->population_unreached = Arr::get($attributes, 'PoplPeoplesLR');
    }
}
