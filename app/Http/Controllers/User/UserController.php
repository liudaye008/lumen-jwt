<?php
namespace App\Http\Controllers\User;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    private $salt;

    public function __construct()
    {
        $this->salt = "userloginregister";
    }


//注册
    public function register(Request $request)
    {
        if ($request->has('name') && $request->has('password') && $request->has('email')) {
            $user = new User;
            $userEmail = $user::where('email', '=', $request->input('email'))->count();
            if ($userEmail == 1){
                return response()->json([
                    'error' => 'User has already existed'
                ], 400);
            }
            $user->name = $request->input('name');
            $user->password = Controller::bcrypt($request->input('password'));
            $user->email = $request->input('email');
            if ($user->save()) {
                return response()->json([
                    'success' => 'User registration success.'
                ], 200);
            } else {
                return response()->json([
                    'error' => 'Unknown error, user registration failed!'
                ], 400);
            }
        } else {
            return response()->json([
                'error' => 'Please enter the full user information!'
            ], 400);
        }
    }

//信息
    public function info(Request $request){
        return $request->auth;
    }
}