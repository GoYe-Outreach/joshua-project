<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject;

use GoYe\JoshuaProject\Requests\Request;
use GoYe\JoshuaProject\Requests\{Continent, Countries, Country, Groups, Language, Languages, Unreached};
use GoYe\JoshuaProject\Resources\{Country as CountryResource, Language as LanguageResource, Unreached as UnreachedResource};
use Illuminate\Support\Collection;

class Service implements Contract
{
    /**
     * Inject the dependencies.
     *
     * @param  array  $config
     */
    public function __construct(protected array $config = [])
    {

    }

    /**
     * Make an instance of the request from the container.
     *
     * @param  string  $request
     * @return Request
     */
    protected function make(string $request): Request
    {
        return app($request);
    }

    /**
     * {@inheritDoc}
     */
    public function continent(string $id): mixed
    {
        return $this->make(Continent::class)
            ->continent($id)
            ->run();
    }

    public function countries(): Collection
    {
        return $this->make(Countries::class)
            ->run();
    }

    public function country(string $id): CountryResource
    {
        return $this->make(Country::class)
            ->country($id)
            ->run();
    }

    public function languages(): Collection
    {
        return $this->make(Languages::class)
            ->run();
    }

    public function language(string $id): LanguageResource
    {
        return $this->make(Language::class)
            ->language($id)
            ->run();
    }

    public function groups(): Collection
    {
        return $this->make(Groups::class)
            ->run();
    }

    /**
     * {@inheritDoc}
     */
    public function unreached(): UnreachedResource
    {
        return $this->make(Unreached::class)
            ->run();
    }
}
