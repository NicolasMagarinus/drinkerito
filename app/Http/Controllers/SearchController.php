<?php

namespace App\Http\Controllers;

use App\Models\Bebida;
use Illuminate\Http\Request;
use App\Search\NameSearch;
use App\Search\IngredientSearch;
use App\Search\TypeSearch;

class SearchController extends Controller
{
    protected $strategies = [];

    public function __construct()
    {
        $this->strategies = [
            new NameSearch(),
            new IngredientSearch(),
            new TypeSearch(),
        ];
    }

    public function headerSearch(Request $request)
    {
        $term = $request->input('q');
        $mode = $request->input('mode', 'nm_bebida');

        $query = Bebida::query();

        foreach ($this->strategies as $strategy) {
            if ($strategy->key() === $mode) {
                $query = $strategy->apply($query, $term);
            }
        }

        $bebidas = $query->get();

        return view('search_results', [
            'bebidas' => $bebidas,
            'term' => $term,
            'mode' => $mode,
        ]);
    }
}
