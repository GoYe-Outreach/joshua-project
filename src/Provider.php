<?php

declare(strict_types=1);

namespace Goye\JoshuaProject;

use GoYe\JoshuaProject\{Contract, Service};
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Contract::class, Service::class);
    }

    public function provides(): array
    {
        return [
            Contract::class,
        ];
    }
}
