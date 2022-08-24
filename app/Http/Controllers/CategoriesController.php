<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{

  
  function delete($id){
    $categories=Category::find($id);
    $categories->delete();
    return redirect('/');
  }

    function showData($id){
        $data= Category::find($id);
        return view('edit', ['data'=>$data]);
    }

    function update(Request $req){
       $data=Category::find($req->id);
       $data->title=$req->title;
       $data->parent_id=$req->parent_id;
       $data->save();
       return redirect('/');

    }
}
