<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Resources;

use Illuminate\Support\Fluent;

class Resource extends Fluent
{
    /**
     * Cast the resource to an array
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_filter($this->attributes, function($value) {
            return ($value !== null && $value !== false && $value !== ''); 
        });
    }
}
