<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $articles = Articles::all();
        return view('welcome', [
            'articles' => $articles
        ]);
    }
}
