<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;

class DataService
{
    public function countDataTypes(): array
    {
        $counts = [];

        // Contagem para o tipo CHAR
        $counts['char'] = DB::table('users')->whereNotNull('char_field')->count();

        // Contagem para o tipo VARCHAR
        $counts['varchar'] = DB::table('users')->whereNotNull('varchar_field')->count();

        // Contagem para o tipo TEXT
        $counts['text'] = DB::table('users')->whereNotNull('text_field')->count();

        // Contagem para o tipo INTEGER
        $counts['integer'] = DB::table('users')->whereNotNull('integer_field')->count();

        return $counts;
    }

    public function countDataFromColumn($columnName): int
    {
        // Contagem dos dados da coluna especificada que não sejam nulos
        return DB::table('users')->whereNotNull($columnName)->count();
    }
}
