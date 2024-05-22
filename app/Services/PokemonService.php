<?php

namespace App\Services;

use App\Models\ModelsPokemons;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PokemonService
{

    /**
     * Lista Pokémons com base na data e filtros fornecidos.
     *
     * @param array $filters
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function listPokemons()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon');

        // Converter a resposta para um array associativo
        $data = $response->json();

        // Aplicar filtros, se fornecidos
        if (!empty($filters)) {
            $data = $this->applyFilters($data, $filters);
        }

        // Registrar os dados no log
        Log::info($data);

        // Retornar os dados obtidos
        return $data;
    }

    /**
     * Aplica os filtros aos dados dos Pokémons.
     *
     * @param array $data Dados dos Pokémons
     * @param array $filters Critérios de filtro
     * @return array
     */
    private function applyFilters(array $data, array $filters)
    {
        // Implemente a lógica para aplicar os filtros aos dados
        // Por exemplo, aqui você pode filtrar os Pokémons com base em suas habilidades, experiência base, etc.
        // Retorne os dados filtrados
        return $data;
    }



    public function datainfo()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon');

        // Converter a resposta para um array associativo
        $data = $response->json();

        // Registrar os dados no log
        Log::info($data);

        // Retornar os dados obtidos
        return response()->json($data);

        return $data;
    }
}
