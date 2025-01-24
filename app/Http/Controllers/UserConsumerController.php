<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductReview;
use App\Models\Service;
use App\Models\ServiceReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class UserConsumerController extends Controller
{
    public function index(){

        return view('consumer.user.edit');

    }

    public function comment($company_id){

        $company = Business::find($company_id);

        $categories = Category::take(10)->get();

        return view('consumer.user.comment',compact('company','company_id','categories')); 

        // if (Sentinel::check()) {
        //     return view('consumer.user.comment',compact('company')); // Show the "comment" view for the authenticated user
        // } else {
        //     return redirect('login'); // Redirect to the login page if the user is not logged in
        // }

    }

    public function productReview($product_id){

        $product  = Product::find($product_id);

        return view('consumer.themes.reviews.product_review', compact('product','product_id'));

    }

    public function storeProductReview(Request $request){

        if (Sentinel::check()) {

            $review =  new ProductReview();
            $review->user_id  = Sentinel::getUser()->id;
            $review->review_title= $request->review_title;
            $review->review= $request->review_input;
            $review->rating= $request->rating_input;
            $review->product_id= $request->product_id;
            $review->status= 1;
            if($review->save())
            {
                $pAvarage = ProductReview::where('product_id',$request->product_id)->get();
    
                $product = Product::find($request->product_id);
                $product->total_rating = round($pAvarage->avg('rating'),1);
                $product->total_review = $pAvarage->count('review');
                $product->save();
            }
            Session::forget(['rating_input','review_input']);

            return response()->json(['message' => 'success' ]);
        }
        else
        {
            // Session::put("rating_input",$request->rating_input); rating_input
            // Session::put("product_id",$request->product_id);
            // Session::put("review_input",$request->review_input);

            Session::put("type",'product');
            Session::put("review_title",$request->input('review_title'));
            Session::put("rating_input",$request->input('rating_input'));
            Session::put("product_id",$request->input('product_id'));
            Session::put("review_input",$request->input('review_input'));

            return response()->json(['message' => 'failed' ]);
        }
    }

    public function serviceReview($service_id){

        $service  = Service::find($service_id);

        return view('consumer.themes.reviews.service_review', compact('service'));

    }

    public function storeServiceReview(Request $request){

        if (Sentinel::check()) {

            $review =  new ServiceReview();
            $review->user_id  = Sentinel::getUser()->id;
            $review->review_title= $request->review_title;
            $review->review= $request->review_input;
            $review->rating= $request->rating_input;
            $review->service_id= $request->service_id;
            $review->status= 1;
            if($review->save())
            {

                $sAvarage = ServiceReview::where('service_id',$request->service_id)->get();
    
                $service = Service::find($request->service_id);
                $service->total_rating = round($sAvarage->avg('rating'),1);
                $service->total_review = $sAvarage->count('review');
                $service->save();
            }

            Session::forget(['rating_input','review_input']);

            return response()->json(['message' => 'success' ]);
        }
        else
        {
            Session::put("type",'service'); 
            Session::put("review_title",$request->input('review_title'));
            Session::put("rating_input",$request->input('rating_input'));
            Session::put("service_id",$request->input('service_id'));
            Session::put("review_input",$request->input('review_input'));

            return response()->json(['message' => 'failed' ]);
        }
    }

    public function evaluate(){

        $company = Business::find(session::get('companyId'));

        return view('consumer.user.comment', compact('company'));
    }

    public function reviewList($business_id){

        $recentReviews = BusinessReview::with('user')->with('business.category')->orderBy('created_at', 'desc')->where('status',1)->where('business_id',$business_id)->limit(3)->get();

        return response()->json($recentReviews);

    }

    public function allReviewList(){

        $recentReviews = BusinessReview::with('user')->with('business.category')->orderBy('created_at', 'desc')->where('status',1)->limit(3)->get();

        return response()->json($recentReviews);
        
    }

    public function productReviewList($product_id){

        $recentProductReview = Product::with(['business', 'productReview.user'])
        ->where('id', $product_id)
        ->whereHas('productReview', function ($query) {
            $query->where('status', 1);
        })
        ->orderBy('id', 'DESC')
        ->limit(3)
        ->get();

        return response()->json($recentProductReview);
    }

    public function serviceReviewList($service_id){

        $recentServiceReview = Service::with(['business', 'serviceReview.user'])
        ->where('id', $service_id)
        ->whereHas('serviceReview', function ($query) {
            $query->where('status', 1);
        })
        ->orderBy('created_at', 'DESC')
        ->limit(3)
        ->get();

        return response()->json($recentServiceReview);

    }

    public function storeReview(Request $request)
    {
        $user = Sentinel::getUser();

        if ($user) {

            // Check if the user has already reviewed the business today
            $existingReview = BusinessReview::where('user_id', $user->id)
                ->where('business_id', $request->company_id)
                ->whereDate('created_at', Carbon::today())
                ->first();

            if ($existingReview) {
                return response()->json(['message' => 'exist']);
            }

            $complogo = Business::where('id', $request->company_id)->first();
            $pAvarage = BusinessReview::where('business_id', $request->company_id)->get();

            $review = new BusinessReview();
            $review->user_id = $user->id;
            $review->business_id = $request->company_id;
            $review->review = $request->review_input;
            $review->rating = $request->rating_input;
            $review->review_title = $request->review_title;
            $review->status = 1;
            $review->company_logo = $complogo->logo;

            if ($review->save()) {
                $business = Business::find($request->company_id);
                $business->total_rating = round($pAvarage->avg('rating'), 1);
                $business->total_review = $pAvarage->count('review');
                $business->save();
            }

            Session::forget(['rating_input', 'review_input', 'review_title', 'company_id']);

            return response()->json(['message' => 'success']);
        } else {
            Session::put("type", 'business');
            Session::put("review_title", $request->input('review_title'));
            Session::put("rating_input", $request->input('rating_input'));
            Session::put("company_id", $request->input('company_id'));
            Session::put("review_input", $request->input('review_input'));

            return response()->json(['message' => 'failed']);
        }
    }

    public function productReadmore($product_id){

        $product  = Product::with('productReview.user')->find($product_id);

        return view('consumer.themes.readmore_product.product_readmore', compact('product'));

    }

    public function serviceReadmore($service_id){

        $service  = Service::with('serviceReview.user')->find($service_id);

        return view('consumer.themes.readmore_product.service_readmore', compact('service'));

    }

    public function likeReview(Request $request){

        $review = ProductReview::find($request->review_id);

        return response()->json(['liked' => $review]);

    }
}
