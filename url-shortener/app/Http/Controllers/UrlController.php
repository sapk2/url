<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $url = Url::create([
            'original_url' => $request->original_url,
            'shortened_url' => Str::random(6)
        ]);

        return redirect('/')->with('success', 'Shortened URL: ' . url($url->shortened_url));
    }

    public function show($shortened_url)
    {
        $url = Url::where('shortened_url', $shortened_url)->firstOrFail();

        return redirect($url->original_url);
    }
}
