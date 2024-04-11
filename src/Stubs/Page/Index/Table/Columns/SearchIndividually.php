<?php

namespace CodeWithDennis\FilamentTests\Stubs\Page\Index\Table\Columns;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class SearchIndividually extends Base
{
    public Closure|string|null $name = 'SearchIndividually';

    public function getShouldGenerate(): bool
    {
        return $this->getIndividuallySearchableColumns($this->resource)->isNotEmpty();
    }

    public function getVariables(): array
    {
        return [
            'RESOURCE_TABLE_INDIVIDUALLY_SEARCHABLE_COLUMNS' => $this->getIndividuallySearchableColumns($this->resource)->keys(),
        ];
    }
}
