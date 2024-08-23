<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Deck;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class DeckController extends Controller
{
    public function index()
    {
        return Inertia::render('Decks/Index', [
            'decks' => Deck::all()
        ]);
    }

    public function createDeck()
    {
        return Inertia::render('Decks/CreateDeck', [
            'categories' => Category::all()
        ]);
    }

    public function storeDeck(Request $request) {
        $params = $request->all();
        $data = [
            'name' => $params['name'],
            'category_id' => $params['category_id'],
            'user_id' => $params['user_id'],
        ];

        Deck::create($data);
        return redirect()->route('index');
    }
}
