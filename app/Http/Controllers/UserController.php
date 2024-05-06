<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Retorna todos os usuários
        return User::all();
    }

    public function filter(Request $request)
    {
        // Filtra os usuários com base no tipo de campo e no valor fornecido
        $type = $request->input('type');
        $value = $request->input('value');

        $users = User::where($type, $value)->get();

        return $users;
    }

    public function filterChar($value)
    {
        $result = User::where('char_field', $value)->get();
        return response()->json($result);
    }

    public function filterVarchar($value)
    {
        $result = User::where('varchar_field', $value)->get();
        return response()->json($result);
    }

    public function filterText($value)
    {
        $result = User::where('text_field', 'like', "%$value%")->get();
        return response()->json($result);
    }

    public function filterInteger($value)
    {
        $result = User::where('integer_field', $value)->get();
        return response()->json($result);
    }
}
