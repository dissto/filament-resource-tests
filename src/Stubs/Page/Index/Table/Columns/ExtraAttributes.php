<?php

namespace CodeWithDennis\FilamentTests\Stubs\Page\Index\Table\Columns;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class ExtraAttributes extends Base
{
    public Closure | string | null $name = 'ExtraAttributes';

    public Closure | string | null $group = 'Page/Index/Table/Columns';

    public function getShouldGenerate(): bool
    {
        return $this->getExtraAttributesColumns($this->resource)->isNotEmpty();
    }

    public function getVariables(): array
    {
        return [
            'RESOURCE_TABLE_EXTRA_ATTRIBUTES_COLUMNS' => $this->transformToPestDataset($this->getExtraAttributesColumnValues($this->resource), ['column', 'attributes']),
        ];
    }
}
