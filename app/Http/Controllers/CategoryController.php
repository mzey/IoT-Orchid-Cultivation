<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index (){
    return view ('category.index_category');

  }

  public function create (){
    return view ('category.create_category');
  }

  public function store (Request $request){
    Category::create ($request->all());
    return redirect ('category.index_category');
  }

  public function show ($id){
    $data = Category::find($id);
    return view ('category.index_category')->with('data', $data);
  }

  public function edit($id)
  {
    $data = Category::find($id);
    return view ('category.edit_category')->with ('data', $data);
  }

  public function update(Request $request,$id)
  {
    return $request->all();
  }

  public function destroy($id)
  {
    Category::find($id)->delete();
    return redirect()->back();
  }

}
