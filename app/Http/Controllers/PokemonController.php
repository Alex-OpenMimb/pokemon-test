<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperCurl;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PokemonController extends Controller
{

    public static function conectApi($i)
    {
        // $url_list = env('API_ENDPOINT');
        $url_list = 'https://pokeapi.co/api/v2/pokemon/';
        $header = ['Content-Type : application/json'];
        $curl = HelperCurl::get("$url_list".$i,$header);

        return $curl;
    }

    public function index()
    {
        $pokemons=[];
     

        for ($i=1; $i < 6 ; $i++) { 

            $response = self::conectApi($i);
            $pokemons[] = $response['response'];

        };
   
        return view('pokemon.table',['pokemons' =>  $pokemons]);
    }

    public function show($id)
    {
        $response = self::conectApi($id);
        $arryApi = $response['response'];

        $pokemon = [
            'name' =>   $arryApi->name,
            'image' =>   $arryApi->sprites->front_default,
            'height' =>   $arryApi->height,
            'weight' =>   $arryApi->weight,
            'abilities' =>   $arryApi->abilities[0]->ability->name,
        ];

        return view('pokemon.show', ['pokemon' => $pokemon]);
    
    }



}
