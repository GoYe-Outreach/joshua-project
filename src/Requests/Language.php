<?php

declare(strict_types=1);

namespace GoYe\JoshuaProject\Requests;

use GoYe\JoshuaProjectResources\Language as Resource;

class Language extends Request
{
    protected $language;

    public function __invoke()
    {
        $response = $this->get()->json();

        return collect($response)
            ->mapInto(Resource::class)
            ->first();
    }

    public function language(string $id)
    {
        $this->language = $id;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    protected function url(): string
    {
        return (string) parent::url().'languages/'.$this->language.'.json';
    }
}
