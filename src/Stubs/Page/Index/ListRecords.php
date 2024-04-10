<?php

namespace CodeWithDennis\FilamentTests\Stubs\Page\Index;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class ListRecords extends Base
{
    public string $name = 'ListRecords';

    public ?string $group = 'Page/Index';

    public function getShouldGenerate(): bool
    {
        return $this->hasPage('index', $this->resource);
    }
}