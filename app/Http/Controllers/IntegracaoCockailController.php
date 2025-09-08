<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class IntegracaoCockailController extends Controller
{
    public static function getDrinks()
    {
        $alphabet = range('a', 'z');

        foreach ($alphabet as $letter) {
            $url = "https://www.thecocktaildb.com/api/json/v1/1/search.php?f={$letter}";
            $response = Http::get($url);

            if ($response->successful() && !empty($response->json()["drinks"])) {
                foreach ($response->json()["drinks"] as $drink) {
                    $dsPreparo = self::traduzirTexto($drink["strInstructions"]);
                    $nmBebida  = self::traduzirTexto($drink["strDrink"]);

                    DB::table("bebida")->updateOrInsert(
                    [
                        "id_externo" => $drink["idDrink"]
                    ],
                    [
                        "nm_bebida" => $nmBebida,
                        "ds_preparo" => $dsPreparo,
                        "id_tipo" => $drink["strAlcoholic"] === "Alcoholic" ? 1 : 2,
                        "ds_imagem" => $drink["strDrinkThumb"] ?? null,
                        "created_at" => now(),
                        "updated_at" => now()
                    ]);
                }
            }
        }
    }

    public static function getIngredients()
    {
        $url = "https://www.thecocktaildb.com/api/json/v1/1/list.php?i=list";
        $response = Http::get($url);
        if ($response->successful() && !empty($response->json()["drinks"])) {
            foreach ($response->json()["drinks"] as $ingrediente) {
                $urlIngrediente = "www.thecocktaildb.com/api/json/v1/1/search.php?i={$ingrediente['strIngredient1']}";
                $ingredientResponse = Http::get($urlIngrediente);

                $objIngrediente = $ingredientResponse->json()["ingredients"][0];

                $nmIngrediente = self::traduzirTexto($objIngrediente["strIngredient"]);
                $idExterno     = $objIngrediente["idIngredient"];

                DB::table("ingrediente")->updateOrInsert(
                    ["id_externo" => $idExterno],
                    ["nm_ingrediente" => $nmIngrediente]
                );
            }
        }
    }

    public static function getDrinkIngredient()
    {
        $arrDrink = DB::table("bebida")->pluck("id_externo");

        foreach ($arrDrink as $idBebida) {
            $url = "www.thecocktaildb.com/api/json/v1/1/lookup.php?i={$idBebida}";

            $response = Http::get($url);
            $objBebida = $response->json()["drinks"];
            if ($response->successful() && !empty($objBebida)) {
                for ($i = 1; $i < 15; $i++) {
                    $objIngrediente = DB::table("ingrediente")->where("nm_ingrediente", "=", $objBebida[0]);

                    if (!$objIngrediente) {
                        $urlIngrediente = "www.thecocktaildb.com/api/json/v1/1/search.php?i=" . $objBebida[0]["strIngredient{$i}"];

                        $ingredientResponse = Http::get($urlIngrediente);

                        //buscar ingrediente pelo id, inserir em ingrediente e depois inserir em bebida_ingrediente. Pegar as medidas
                    }
                }
            }
        }
    }

    static function traduzirTexto($text, $from = 'en', $to = 'pt-BR') {
        $response = Http::post('http://localhost:5000/translate', [
            'q' => $text,
            'source' => $from,
            'target' => $to,
            'format' => 'text'
        ]);

        if ($response->successful()) {
            return $response->json()['translatedText'];
        }

        return $text;
    }
}
