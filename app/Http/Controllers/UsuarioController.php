<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // modelo Usuario
use App\Models\Resultado; // modelo Resultado
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|unique:usuarios',
        ]);

        $usuario = Usuario::create($validated);

        return response()->json($usuario, 201);
    }

    public function updateStats($id, $resultadoId)
    {
        $usuario = Usuario::findOrFail($id);
        $resultado = Resultado::findOrFail($resultadoId);

        switch ($resultado->nombre) {
            case 'victoria':
                $usuario->increment('victorias');
                break;
            case 'empate':
                $usuario->increment('empates');
                break;
            case 'derrota':
                $usuario->increment('derrotas');
                break;
        }

        return response()->json($usuario);
    }
}
