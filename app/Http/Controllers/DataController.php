<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\DataService;


class DataController extends Controller
{
    protected $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function countDataTypes()
    {
        $count = $this->dataService->countDataTypes();
        return response()->json($count);
    }

    public function countDataByFilter(Request $request, DataService $dataService)
    {
        // Obtém os parâmetros da rota
        $columnName = $request->route('columnName');
        // Chama o serviço para contar os dados da coluna especificada
        $contagem = $dataService->countDataFromColumn($columnName);

        return response()->json([$columnName => $contagem]);
    }
}