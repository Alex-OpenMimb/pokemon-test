<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperCurl;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons=[];
        $url_list = 'https://pokeapi.co/api/v2/pokemon/';
        $header = ['Content-Type : application/json'];

        for ($i=1; $i < 6 ; $i++) { 

            $curl = HelperCurl::get("$url_list".$i,$header);
            $pokemons[] = $curl['response'];

        };
   
        return view('pokemon.table',['pokemons' =>  $pokemons]);
    }

    public function show($id)
    {
        $url_list = 'https://pokeapi.co/api/v2/pokemon/';
        $header = ['Content-Type : application/json'];

        $curl = HelperCurl::get("$url_list".$id,$header);

        $arryApi = $curl['response'];

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
