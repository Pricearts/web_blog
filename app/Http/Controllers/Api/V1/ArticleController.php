<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Resources\V1\ArticleResource;
use App\Http\Resources\V1\ArticlesCollection;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3|max:50',
            'subtitle' => 'required|min:10|max:250',
            'content' => 'required|min:10',
            'author' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $article = Articles::create($request->all());
        return new ArticleResource($article);
    }

    /**
     * @param Articles $article
     */
    public function show(Articles $article) {
        return new ArticleResource($article);
    }

    public function update(Request $request, Articles $article) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3|max:50',
            'subtitle' => 'required|min:10|max:250',
            'content' => 'required|min:10',
            'author' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $article->update($request->all());

        return new ArticleResource($article);
    }

    public function destroy(Articles $article)
    {
        $article->delete();

        return response()->json([
            'success' => true,
            'message' => "Article deleted successfully."
        ]);
    }
}
