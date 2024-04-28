<?php

namespace CodeWithDennis\FilamentTests\Stubs\Resource\Page\Edit\RelationManager;

use CodeWithDennis\FilamentTests\Stubs\Base;

class ListRecordsPaginated extends Base
{
    public function getDescription(): string
    {
        return 'can list records on the '.str($this->relationManager)->basename()->snake()->replace('_', ' ').' on the edit page with pagination';
    }

    public function getShouldGenerate(): bool
    {
        return $this->hasRelationManager($this->relationManager) &&
            $this->getRelationManagerTableColumns($this->relationManager)->isNotEmpty();
    }

    public function getVariables(): array
    {
        return [
            'DEFAULT_PER_PAGE_OPTION' => $this->convertDoubleQuotedArrayString($this->getTableDefaultPaginationPageOption($this->resource)),
            'DEFAULT_PAGINATED_RECORDS_FACTORY_COUNT' => $this->convertDoubleQuotedArrayString($this->getTableDefaultPaginationPageOption($this->resource) * 2),
            'RELATION_MANAGER_NAME' => str($this->relationManager)->basename(),
            'RELATION_MANAGER_CLASS' => $this->relationManager.'::class',
            'RELATION_MANAGER_RELATIONSHIP_MODEL' => $this->getRelationManagerRelationshipNameToModelClass($this->relationManager),
            'RELATION_MANAGER_RELATIONSHIP_NAME_UCFIRST' => str($this->getRelationManager($this->relationManager)->getRelationshipName())->ucfirst(),
            'RELATION_MANAGER_RELATIONSHIP_NAME_LCFIRST' => str($this->getRelationManager($this->relationManager)->getRelationshipName())->lcfirst(),
        ];
    }
}
