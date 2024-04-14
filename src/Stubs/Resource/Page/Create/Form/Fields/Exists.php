<?php

namespace CodeWithDennis\FilamentTests\Stubs\Resource\Page\Create\Form\Fields;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class Exists extends Base
{
    public Closure|bool $isTodo = true;

    public function getDescription(): string
    {
        return 'has a X field on create form';
    }

    public function getShouldGenerate(): bool
    {
        return collect($this->getResourceCreateFields($this->resource))->count();
    }
}
