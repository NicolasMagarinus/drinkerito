<?php

namespace App\Search;

use Illuminate\Database\Eloquent\Builder;

class TypeSearch implements BebidaSearchStrategy
{
    public function apply(Builder $query, string $term): Builder
    {
        return $query->where('tipo', 'like', "%{$term}%");
    }

    public function key(): string
    {
        return 'tipo';
    }

    public function label(): string
    {
        return 'Tipo de bebida';
    }
}
