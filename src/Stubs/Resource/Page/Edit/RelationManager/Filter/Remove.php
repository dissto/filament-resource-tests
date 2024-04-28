<?php

namespace CodeWithDennis\FilamentTests\Stubs\Resource\Page\Edit\RelationManager\Filter;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class Remove extends Base
{
    public Closure|bool $isTodo = true;

    public function getDescription(): string
    {
        return 'can remove a table filter on the '.str($this->relationManager)->basename()->snake()->replace('_', ' ').' on the edit page';
    }
}
