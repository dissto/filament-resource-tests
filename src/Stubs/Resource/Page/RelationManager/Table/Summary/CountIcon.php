<?php

namespace CodeWithDennis\FilamentTests\Stubs\Resource\Page\RelationManager\Table\Summary;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;
use Filament\Tables\Columns\IconColumn;

class CountIcon extends Base
{
    public Closure|bool $isTodo = true;

    public function getDescription(): string
    {
        return 'can count the occurrence of icons in a column on relation manager';
    }
}
