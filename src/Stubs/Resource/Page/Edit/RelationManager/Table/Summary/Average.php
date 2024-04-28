<?php

namespace CodeWithDennis\FilamentTests\Stubs\Resource\Page\Edit\RelationManager\Table\Summary;

use Closure;
use CodeWithDennis\FilamentTests\Stubs\Base;

class Average extends Base
{
    public Closure|bool $isTodo = true;

    public function getDescription(): string
    {
        return 'can average values in a column on the '.str($this->relationManager)->basename()->snake()->replace('_', ' ').' on the edit page';
    }

    public function getShouldGenerate(): bool
    {
        return $this->getRelationManagerTableColumnsWithSummarizers($this->relationManager)
            ->filter(fn ($column) => collect($column->getSummarizers())
                ->filter(fn ($summarizer) => $summarizer::class === \Filament\Tables\Columns\Summarizers\Average::class)
                ->count())
            ->isNotEmpty();
    }
}