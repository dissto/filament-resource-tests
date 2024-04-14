<?php

namespace CodeWithDennis\FilamentTests\Stubs\Page\Create\Form\Fields;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class Hidden extends Base
{
    public Closure|bool $isTodo = true;

    public function getShouldGenerate(): bool
    {
        return collect($this->getResourceCreateFields($this->resource))
            ->filter(fn ($field) => $field->isHidden())->count();
    }
}