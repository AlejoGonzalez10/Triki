<?php

namespace App\Http\Controllers;

use app\models\Juego;
use Illuminate\Http\Request;


class JuegoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'resultado_id' => 'required|exists:resultados,id',
        ]);

        $juego = Juego::create($validated);

        app(UsuarioController::class)->updateStats($validated['usuario_id'], $validated['resultado_id']);

        return response()->json($juego, 201);
    }

    public function index()
    {
        $juegos = Juego::with(['usuario', 'resultado'])->get();
        return response()->json($juegos);
    }
}

