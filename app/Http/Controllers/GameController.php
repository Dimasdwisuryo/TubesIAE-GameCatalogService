<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return response()->json(
            Game::with('denominations')->get()
        );
    }

    public function show(string $slug)
    {
        $game = Game::with('denominations')
            ->where('slug', $slug)
            ->first();

        if (!$game) {
            return response()->json([
                'message' => 'Game tidak ditemukan'
            ], 404);
        }

        return response()->json($game);
    }
}
