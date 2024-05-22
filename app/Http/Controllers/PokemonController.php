<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsPokemons;
use App\Services\PokemonService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PokemonController extends Controller
{

    protected $pokemonService;

    public function __construct(PokemonService $pokemonService)
    {
        $this->pokemonService = $pokemonService;
    }


    public function index()
    {
        // Chamar a função do serviço que obtém os dados dos Pokémons
        $data = $this->pokemonService->datainfo();

        // Retornar os dados obtidos
        return response()->json($data);
    }
    public function dataPokemons()
    {
        $data = $this->pokemonService->listPokemons($filters);

        // Retornar os dados obtidos
        return response()->json($data);
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function fetchPokemonData()
    {
    }
}
