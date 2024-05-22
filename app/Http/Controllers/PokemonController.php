<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsPokemons;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PokemonController extends Controller
{
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon');

        // Converter a resposta para um array associativo
        $data = $response->json();

        // Registrar os dados no log
        Log::info($data);

        // Retornar os dados obtidos
        return response()->json($data);
    }

    public function store(Request $request)
    {
        // Código para armazenar um novo Pokémon
    }

    public function show(string $id)
    {
        // Código para exibir um Pokémon específico
    }

    public function fetchPokemonData()
    {
    }
}
