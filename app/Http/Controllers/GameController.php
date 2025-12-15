<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Category;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $query = Game::with('category');

        // Filtro por categoría
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Filtro por búsqueda
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $games = $query->get();

        return view('games.index', compact('games', 'categories'));
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }
}


