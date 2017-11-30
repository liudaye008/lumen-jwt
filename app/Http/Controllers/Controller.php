<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function bcrypt($value,$options=[]){
        return app('hash')->make($value, $options);
    }
}
