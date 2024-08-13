<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Deck;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class FrontController extends Controller
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
}
