<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    // apiKey: 68e20344e42cd9c02c7a2919ff0b0b44f00ea0dc

    // get data
    public function getData(Request $request)
    {
        $res = Http::get('https://api.nomics.com/v1/currencies/ticker?key=68e20344e42cd9c02c7a2919ff0b0b44f00ea0dc&convert=USD&per-page=100&page=1')
            ->json();
        return view('index', compact('res'));
    }
}
