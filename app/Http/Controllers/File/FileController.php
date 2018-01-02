<?php
namespace App\Http\Controllers\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FileController extends Controller
{
    public function upload(Request $request)
    {


        return response()->json([
            'id' => 1,
            'url' => 2,
        ]);
    }
}