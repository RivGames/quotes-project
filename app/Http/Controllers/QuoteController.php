<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::query()->paginate(10);

        return view('quotes.index', compact('quotes'));
    }

    public function random()
    {
        $randomQuote = Quote::inRandomOrder()->limit(1)->get();

        return isset($randomQuote[0]) ? view('quotes.show', ['quote' => $randomQuote[0]]) : redirect()->to('/');
    }
}
