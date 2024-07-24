<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Requests;

use Carbon\Carbon;
use GoYe\JoshuaProject\Requests\Request;
use GoYe\JoshuaProject\Resources\Unreached as Resource;

class Unreached extends Request
{
    public function __invoke()
    {
        $today = Carbon::now();

        $this->setParam('day', $today->format('d'));
        $this->setParam('month', $today->format('m'));

        $response = $this->get()->json();

        return collect($response)
            ->mapInto(Resource::class)
            ->first();
    }

    /**
     * {@inheritDoc}
     */
    protected function url(): string
    {
        return (string) parent::url().'people_groups/daily_unreached.json';
    }
}
