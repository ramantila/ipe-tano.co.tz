<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Product;
use Illuminate\Http\Request;
// use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Session;
use Sentinel;

class ProductController extends Controller
{
    public function index($business_id){

        $products = Product::where('business_id',$business_id)->get();

        return view('admin.products.index', compact('business_id','products'));

    }

    public function create($business_id){

        return view('admin.products.create', compact('business_id'));

    }

    public function store(Request $request, $business_id){
        

        $business = Business::find($business_id);
        $filename = '';
        if ($files = $request->file('product_logo')) {
            $destinationPath = 'images/product'; // upload path
            $filename = 'product/'.date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $filename);
        }

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->user_id = Sentinel::getUser()->id;
        // $product->user_id = $business->user_id;
        $product->business_id = $business->id;
        $product->logo = $filename;
        $product->save();

        Session::flash('success', 'Product added successfull!');
        return redirect('businesses/'.$business_id.'/product/view');

    }

    public function edit($productId){
        $product = Product::find($productId);
        return view('admin.products.edit', compact('product'));
    }

    public function update($productId, Request $request)
    {
        // Find product, return error if not found
        $product = Product::find($productId);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        // Handle file upload
        if ($request->hasFile('product_logo')) {
            $file = $request->file('product_logo');
            $destinationPath = 'images/product'; // Upload path
            $filename = 'product/' . date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $filename);
            $product->logo = $filename; // Update logo if new file uploaded
        }
    
        // Update other product details
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->save();
    
        Session::flash('success', 'Product updated successfull!');
        return redirect('businesses/'.$product->business_id.'/product/view');
    }
    
}
