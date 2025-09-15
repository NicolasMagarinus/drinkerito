<?php

namespace App\Search;

use App\Models\Bebida;
use Illuminate\Database\Eloquent\Builder;

class IngredientSearch implements BebidaSearchStrategy
{
    public function apply(Builder $query, string $term): Builder
    {
        return $query->whereHas('ingredientes', function ($q) use ($term) {
            $q->where('nome', 'like', "%{$term}%");
        });
    }

    public function key(): string
    {
        return 'ingrediente';
    }

    public function label(): string
    {
        return 'Ingrediente';
    }
}
