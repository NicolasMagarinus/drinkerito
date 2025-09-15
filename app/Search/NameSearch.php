<?php

namespace App\Search;

use App\Models\Bebida;
use Illuminate\Database\Eloquent\Builder;

class NameSearch implements BebidaSearchStrategy
{
    public function apply(Builder $query, string $term): Builder
    {
        return $query->where('nome', 'like', "%{$term}%");
    }

    public function key(): string
    {
        return 'nome';
    }

    public function label(): string
    {
        return 'Nome da bebida';
    }
}
