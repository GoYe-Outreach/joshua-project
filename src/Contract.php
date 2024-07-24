<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject;

use GoYe\JoshuaProject\Resources\{Country, Language, Unreached};
use Illuminate\Support\Collection;

interface Contract
{
    /**
     * Fetch the data for the given continent.
     *
     * @param  string  $id
     * @return Collection
     */
    public function continent(string $id): mixed;

    /**
     * Fetch data for all the countries.
     *
     * @return \Illuminate\Support\Collection<\GoYe\JoshuaProjectResources\Country>
     */
    public function countries(): Collection;

    /**
     * Fetch data for a specific country
     *
     * @param  string  $id
     * @return Country
     */
    public function country(string $id): Country;

    /**
     * Fetch data for all languages.
     *
     * @return Collection
     */
    public function languages(): Collection;

    /**
     * Fetch a specific language
     *
     * @param  string  $id
     * @return Language
     */
    public function language(string $id): Language;

    /**
     * Fetch all people groups.
     *
     * @return \Illuminate\Support\Collection<\GoYe\JoshuaProjectResources\Group>
     */
    public function groups(): Collection;

    /**
     * Fetch data for the given group.
     *
     * @param  string  $id
     * @return Group
     */
    // public function peopleGroup(string $id): Group;

    /**
     * Fetch the unreached of the day.
     *
     * @return Unreached
     */
    public function unreached(): Unreached;

    /**
     * Fetch data for the given region.
     *
     * @param  string  $id
     * @return Region
     */
    // public function region(string $id): Region;

}
