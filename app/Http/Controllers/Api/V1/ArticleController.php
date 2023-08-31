<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Resources\V1\ArticleResource;
use App\Http\Resources\V1\ArticlesCollection;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return new ArticlesCollection(Articles::paginate());
    }

    /**
     * @param Articles $article
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article) {
        return new ArticleResource($article);
    }
}
