<?php
namespace App\Http\Controllers\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Models\Article\Article;

class ArticleController extends Controller
{
    public function create(Request $request)
    {

        $article = new Article;
        $article->post_author = $request->author;
        $article->post_content = $request->content;
        $article->post_title = $request->title;
        $article->post_status = $request->status;
        $article->save();
        return response()->json([
            'id' => 1,
            'url' => $article,
        ]);
    }

    public function delete(Request $request)
    {

        $article = new Article;
        $article->post_author = 1;
        $article->post_content = 1;
        $article->post_title = 1;
        $article->post_status = 1;
        $article->save();
        return response()->json([
            'id' => 1,
            'url' => $article,
        ]);
    }
}