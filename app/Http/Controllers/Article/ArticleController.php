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
            'message' => $article,
        ]);
    }

    public function delete(Request $request)
    {
//        print_r($request->status);die;
        $article = new Article;
        $article->destroy(1);
        return response()->json([
            'id' => 1,
            'message' => $article,
        ]);
    }

    public function show(Request $request)
    {
        $article = new Article;
        $article = $article->find(3);
        return response()->json([
            'id' => 1,
            'message' => $article,
        ]);
    }

    public function update(Request $request){
        $article = new Article;
        $article = $article->find(3);
        $article->post_title = '亚历山大';
        $article->save();
        return response()->json([
            'id' => 1,
            'message' => $article,
        ]);
    }

}