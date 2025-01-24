<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Session;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::orderBy('id','DESC')->get();

        return view('admin.category.index',compact('categories'));

    }

    public function store(Request $request){

        $filename = '';

        if ($files = $request->file('cat_icon')) {
            $destinationPath = 'images/category'; // upload path
            $filename = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $filename);
        }

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_icon = $filename;
        
        $category->save();

        Session::flash('success', 'Category added successfull!');
        return redirect('categories/view');

    }

    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);

        if($request->cat_icon != '')
        {
            $filename = '';

            if ($files = $request->file('cat_icon')) {
                $destinationPath = 'images/category'; // upload path
                $filename = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $filename);
            }
            
            $category->category_icon = $filename;
        }
        
        $category->category_name = $request->category_name;
        $category->save();

        Session::flash('success', 'Category updated successfull!');
        return redirect('categories/view');

    }

    public function delete(Request $request){

        $category = Category::find($request->id);

        $category->delete();

        return redirect('categories/view');

    }
}
