<?php

namespace CodeWithDennis\FilamentTests\Stubs\Resource\Page\Create\Form;

use CodeWithDennis\FilamentTests\Stubs\Base;
use Filament\Forms\Form;

class Exists extends Base
{
    public function getShouldGenerate(): bool
    {
        return $this->getResourceCreateForm($this->resource)::class == Form::class;
    }
}