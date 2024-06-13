<?php

namespace CodeWithDennis\FilamentTests\Stubs\Resource\Page\Edit\Widget;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class RenderFooterWidgets extends Base
{
    public Closure|bool $isTodo = true;

    public function getDescription(): string
    {
        return 'can render footer widgets on the edit page';
    }

    public function getShouldGenerate(): bool
    {
        return true; // TODO: implement
    }
}