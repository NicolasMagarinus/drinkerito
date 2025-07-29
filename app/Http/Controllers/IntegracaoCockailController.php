<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IntegracaoCockailController extends Controller
{
    public static function getDrinks()
    {
        $response = Http::get("https://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita");

        $drinks = $response->json()['drinks'];

        foreach ($drinks as $drink) {
            $drink = self::traduzirTexto($drink['strInstructions']);
            error_log(json_encode($drink, JSON_UNESCAPED_UNICODE));

        }
    }

    static function traduzirTexto($texto, $from = 'en', $to = 'pt-BR') {
        $response = Http::post('http://localhost:5000/translate', [
            'q' => $texto,
            'source' => $from,
            'target' => $to,
            'format' => 'text'
        ]);

        if ($response->successful()) {
            return $response->json()['translatedText'];
        }

        return $texto;
    }
}
