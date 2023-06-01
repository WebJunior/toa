<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add_user(Request $request){
        dd($request->all());
    }
}
