<?php
namespace App\Http\Controllers\System;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Models\System\System;

class SystemController extends Controller
{

    public function delete(Request $request,$id)
    {
        $article = new System;
        $article = $article->destroy($id);
        return response()->json([
            'code' => 200,
            'message' => $article,
        ]);
    }

    public function show(Request $request,$id)
    {
        $system = new System;
        $system = $system->where('meta_key', $id)->first();
        return response()->json(
            $system
        );
    }


}