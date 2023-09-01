<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id) {
        $article = $id;

        if (!Articles::findOrFail($id)) {
            abort(404);
        }

        return view('article', [
            'articleId' => $id
        ]);
    }
}
