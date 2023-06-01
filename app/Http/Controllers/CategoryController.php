<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Category;

class CategoryController extends Controller
{
    public function add_category(Request $request){
        dd($request->all());
        // $category = new Category;
        
        // $category->name = $request->name;
        // $category->od = $request->od;
        // $category->status = $request->status;

        // $category->save();

        // return redirect()->route('admin');
    }

    // public function get_category(){

    // }
}
