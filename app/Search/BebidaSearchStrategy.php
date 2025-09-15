<?php

namespace App\Search;

use Illuminate\Database\Eloquent\Builder;

interface BebidaSearchStrategy
{
    public function apply(Builder $query, string $term): Builder;
    public function key(): string;
    public function label(): string;
}
