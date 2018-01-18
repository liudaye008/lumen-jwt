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
        $article->post_content = $request->body;
        $article->post_description = $request->description;
        $article->post_title = $request->title;
        $article->post_status = $request->status;
        $article->save();
        return response()->json([
            'id' => 1,
            'message' => $article,
        ]);
    }

    public function delete(Request $request,$id)
    {
        $article = new Article;
        $article = $article->destroy($id);
        return response()->json([
            'code' => 200,
            'message' => $article,
        ]);
    }

    public function show(Request $request,$id)
    {
        $article = new Article;
        $article = $article->find($id);
        return response()->json(
            $article
        );
    }

    public function index(Request $request)
    {
        var_dump($request->page);
        $article = new Article;
        $article = $article->get();
        return response()->json(
            $article
        );
    }

    public function update(Request $request,$id){
        $article = new Article;
        $article = $article->find($id);
        if (!empty($request->title)){
            $article->post_title = $request->title;
        }
//        $article->post_author = $request->author;
//        $article->post_content = $request->content;
//        $article->post_status = $request->status;
        $article->save();
        return response()->json([
            'id' => 1,
            'message' => $article,
        ]);
    }

}