<?php

namespace App\Http\Controllers;

use App\Models\BusinessReview;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\ServiceReview;
use Illuminate\Http\Request;
use Session;

class BusinessReviewController extends Controller
{
    public function index(){

        $reviews = BusinessReview::all();

        return view('admin.reviews.index',compact('reviews'));

    }

    public function show($review_id){

       $review = BusinessReview::with('user')->with('business')->find($review_id);

       return view('admin.reviews.show', compact('review'));

        //    if($review->service_id != 0)
        //    {
        //         return view('review.service.show', compact('review'));
        //    }
        //    elseif($review->product_id != 0)
        //    {
        //         return view('review.product.show',compact('review'));
        //    }
        //    else
        //    {
        //         return view('review.show', compact('review'));
        //    }

    }

    public function update(Request $request, $review_id){

        $review = BusinessReview::find($review_id);
        $review->status = $request->status;
        $review->save();

        Session::flash('success', 'Status Changed');
        return redirect('reviews/view');
    }

    public function delete($review_id){
        $review = BusinessReview::find($review_id);
        $review->status = 3;
        $review->save();

        Session::flash('success', 'Review Deleted');
        return redirect('reviews/view');
    }

    public function indexProduct(){

        $reviews = ProductReview::with('products')->with('user')->get();

        return view('admin.reviews.products.index', compact('reviews'));

    }

    public function showProduct($product_id){

        $review = ProductReview::with('user')->with('products')->find($product_id);

        return view('admin.reviews.products.show', compact('review'));

    }

    public function updateProduct(Request $request, $product_id){

        $review = ProductReview::find($product_id);
        $review->status = $request->status;
        $review->save();

        Session::flash('success', 'Status Changed');
        return redirect('reviews/view');
    }

    public function indexService(){
    
         $reviews = ServiceReview::with('services')->with('user')->get();

         return view('admin.reviews.services.index', compact('reviews'));

    }

    public function showServices($product_id){

        $review = ServiceReview::with('user')->with('services')->find($product_id);

        return view('admin.reviews.services.show', compact('review'));

    }

    public function updateService(Request $request, $product_id){

        $review = ServiceReview::find($product_id);
        $review->status = $request->status;
        $review->save();

        Session::flash('success', 'Status Changed');
        return redirect('reviews/view');
    }

    public function deleteService($service_id){
        $review = ServiceReview::find($service_id);
        $review->status = 3;
        $review->save();

        Session::flash('success', 'Review Deleted');
        return redirect('reviews/services/view');
    }
}
