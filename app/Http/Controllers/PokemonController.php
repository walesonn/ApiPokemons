<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use function Ramsey\Uuid\v1;

class PokemonController extends Controller
{
    public function view(){

        $pokemons = $this->getPokemons();

        return view("views.home",['pokemons'=>$pokemons]);
    }

    public function getPokemons(){
        $url = "https://www.canalti.com.br/api/pokemons.json";
        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        $resposta = json_decode(curl_exec($ch));

        return $resposta;
    }
}
