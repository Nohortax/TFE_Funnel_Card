<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Deck;
use Inertia\Inertia;
use Inertia\Response;
use Request;

class DeckController extends Controller
{
    public function index()
    {
        return Inertia::render('Decks/Index', [
            'decks' => Deck::query()
                ->when(Request::input('search'), function($query, $search){
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(12)
                ->withQueryString()
                ->through(fn($deck) => [
                    'id' => $deck->id,
                    'name' => $deck->name
                ]),
            'filters'=> Request::only(['search'])
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
