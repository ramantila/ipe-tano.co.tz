<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\Region;
use App\Models\Service;
use App\Models\ServiceReview;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Session;

class ConsumerController extends Controller
{
    public function index()
    {
    
        $topCompanies = Business::where('total_rating', '>', 2)
        ->where('total_rating', '<=', 5)
        ->take(3) 
        ->get();
        
        $categories = Category::take(6)->get();

        return view('.consumer.themes.index', compact('topCompanies', 'categories'));
    }

    public function indexBusiness()
    {

        return view('business_fontend.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $business = Business::where('business_name', 'like', '%' . $query . '%')
            ->get();

        $category = Category::where('category_name', 'like', '%' . $query . '%')
            ->get();

        $results = [
            'business' => $business,
            'category' => $category,
        ];

        return response()->json($results);
    }

    public function searchProduct(Request $request)
    {
        $query = $request->input('query');

        $product = Product::where('product_name', 'like', '%' . $query . '%')
        ->with('business')  // Eager load the related business
        ->get()
        ->map(function ($product) {
            // Add business_name to each product
            $product->business_name = $product->business ? $product->business->business_name : null;
            return $product;
        });

    // Search for services and eager load business name
    $service = Service::where('service_name', 'like', '%' . $query . '%')
        ->with('business')  // Eager load the related business
        ->get()
        ->map(function ($service) {
            // Add business_name to each service
            $service->business_name = $service->business ? $service->business->business_name : null;
            return $service;
        });

        $results = [
            'product' => $product,
            'service' => $service,
        ];

        return response()->json($results);
    }

    public function reviews(Request $request)
    {

        $categories = Category::orderBy('id', 'DESC')->get();

        $search = $request->input('search');
        $businesses = Business::when($search, function($query) use ($search) {
            return $query->where('business_name', 'like', '%'.$search.'%')
                         ->orWhere('description', 'like', '%'.$search.'%');
        })
        ->orderBy('id', 'DESC')
        ->paginate(10);
        $bestCompanies = Business::take(15)->orderBy('total_rating','DESC')->get(['business_name', 'logo','id']);
        $topCategories = Category::take(15)->get(['category_name','category_icon']);
      


        return view('consumer.themes.reviews.reviews', compact('businesses', 'categories','search','bestCompanies','topCategories'));
    }

    public function reviewsCompany(Request $request)
    {

        $categories = Category::orderBy('id', 'DESC')->get();

        $businesses = Business::where('business_name', 'like', '%' . $request->company . '%')->orderBy('id', 'DESC')->get();

        return view('consumer.themes.reviews.review_company', compact('businesses', 'categories'));
    }

    public function reviewsCompanyCategory(Request $request)
    {

        if ($request->categoryId == 'all') {

            $categories = Category::orderBy('id', 'DESC')->get();

            $businesses = Business::orderBy('id', 'DESC')->get();
        } else {
            $category = Category::where('category_name', $request->categoryName)->first();

            $categories = Category::orderBy('id', 'DESC')->get();

            $businesses = Business::where('category_id', $category->id)->orderBy('id', 'DESC')->get();
        }

        return view('consumer.themes.reviews.category',  compact('businesses', 'categories'));
    }

    public function review($business_id)
    {

        $business = Business::with('products', 'services', 'reviews')->find($business_id);
        return view('consumer.themes.reviews.review', compact('business'));
    }

    public function businessReviewReported($business_id)
    {

        return view('consumer.themes.review_report.business_review_report', compact('business_id'));
    }

    public function storebusinessReviewReported(Request $request, $business_id)
    {

        $business = BusinessReview::find($business_id);
        $business->review_reason = $request->reason;
        $business->status = 2;
        $business->save();

        Session::flash('success', 'Report sent successfull!');
        return redirect('business/reviews/' . $business->business_id);
    }

    public function categories()
    {

        $data  = Category::orderBy('id', 'DESC')->get();

        return view('consumer.themes.categories', compact('data'));
    }

    public function categoryBusinesses($category_name)
    {

        $data = Category::orderBy('id', 'DESC')->get();

        // $categoryCompany = Category::where('category_name', $category_name)->first()->business;
        $categoryCompany = Category::where('category_name', $category_name)
            ->with(['business' => function ($query) {
                $query->where('display', 1);
                $query->where('status', 1);
            }])
            ->first();

        $categories = Category::take(10)->get();

        return view('consumer.themes.category_companies', compact('data', 'categoryCompany', 'categories'));
    }

    public function terms()
    {
        return view('consumer.user.terms');
    }

    public function register()
    {

        $regions = Region::get();

        return view('consumer.user.register', compact('regions'));
    }

    public function registerProcess(Request $request)
    {

        $phone = $request->phone;

        // Check if the number starts with '255'
        if (substr($phone, 0, 3) === '255') {
            // Remove '255' and add '0' at the beginning
            $phone = '0' . substr($phone, 3);
        }

        $credentials = [
            'email' => $request->email,
            'phone' => $phone,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'region_id' => $request->region_id,
            'gender' => $request->gender,
            'dob' => $request->dob,
        ];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleByName('consumer');
        $role->users()->attach($user->id);

        $credentials = array(
            "email" => $request->email,
            "password" => $request->password,
        );

        $user = Sentinel::authenticate($credentials);

        Mail::to($user->email)->send(new RegisterMail());

        Session::flash('success', 'Registered  successfull!');

        return redirect('/login');

        // if ($user)
        // {
        //     // Mail::to($user->email)->send(new RegisterMail());

        //     if(Session::get('type') == 'business')
        //     {
        //         return redirect('consumer/business/write-review/'.Session::get('company_id'));
        //     }
        //     if(Session::get('type') == 'product')
        //     {
        //         return redirect('consumer/product/write-review/'.Session::get('product_id'));
        //     }
        //     if(Session::get('type') == 'service')
        //     {
        //         return redirect('consumer/service/write-review/'.Session::get('service_id'));
        //     }
        // }

        // Session::flash('success', 'Registered  successfull!');
        // return redirect('/login');

    }

    public function productReviewReported($review_id)
    {

        return view('consumer.themes.review_report.product_review_report', compact('review_id'));
    }

    public function storeproductReviewReported(Request $request, $review_id)
    {

        $product = ProductReview::find($review_id);
        $product->review_reason = $request->reason;
        $product->status = 2;
        $product->save();

        Session::flash('success', 'Report sent successfull!');
        return redirect('consumer/product/read-more/' . $product->product_id);
    }

    public function serviceReviewReported($review_id)
    {

        return view('consumer.themes.review_report.service_review_report', compact('review_id'));
    }

    public function storeserviceReviewReported(Request $request, $review_id)
    {

        $service = ServiceReview::find($review_id);
        $service->review_reason = $request->reason;
        $service->status = 2;
        $service->save();

        Session::flash('success', 'Report sent successfull!');
        return redirect('consumer/service/read-more/' . $service->service_id);
    }

    // added function by frontend developer - nuhu
    public function AboutUs(){
        return view('consumer.themes.about_us');
    }

    public function previewTerms($language)
    {
        // Set the file name based on the language
        if ($language === 'Sheria_na_Masharti') {
            $fileName = 'Sheria_na_Masharti.pdf';
        } else {
            $fileName = 'Terms_and_Conditions_for_Reviewers.pdf';
        }

        $filePath = public_path("files/{$fileName}");

        if (!file_exists($filePath)) {
            abort(404, "File not found.");
        }

        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
        ]);
    }

    public function previewPrivacyPolicy($language)
    {
        // Set the file name based on the language
        if ($language === 'Sera_ya_Faragha') {
            $fileName = 'Sera_ya_Faragha.pdf';
        } else {
            $fileName = 'Privacy_Policy_for_Reviewers.pdf';
        }

        $filePath = public_path("files/{$fileName}");

        if (!file_exists($filePath)) {
            abort(404, "File not found.");
        }

        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
        ]);
    }

    public function aboutUsBusiness(){
        return   view('business_fontend.about-us');
    }

    public function whyUsBusiness(){
        return   view('business_fontend.why-us');
    }
    
    
    
    public function contactBusiness(){
        return   view('business_fontend.contact');
    }


    public function pricingBusiness(){
        return view('business_fontend.pricing');
    }
    


}
=======
<?php

namespace App\Http\Controllers;

use App\Mail\RegisterMail;
use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\Region;
use App\Models\Service;
use App\Models\ServiceReview;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Session;

class ConsumerController extends Controller
{
    public function index()
    {
    
        $topCompanies = Business::where('total_rating', '>', 2)
        ->where('total_rating', '<=', 5)
        ->take(3) 
        ->get();
        
        $categories = Category::take(6)->get();

        return view('.consumer.themes.index', compact('topCompanies', 'categories'));
    }

    public function indexBusiness()
    {

        return view('business_fontend.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $business = Business::where('business_name', 'like', '%' . $query . '%')
            ->get();

        $category = Category::where('category_name', 'like', '%' . $query . '%')
            ->get();

        $results = [
            'business' => $business,
            'category' => $category,
        ];

        return response()->json($results);
    }

    public function searchProduct(Request $request)
    {
        $query = $request->input('query');

        $product = Product::where('product_name', 'like', '%' . $query . '%')
        ->with('business')  // Eager load the related business
        ->get()
        ->map(function ($product) {
            // Add business_name to each product
            $product->business_name = $product->business ? $product->business->business_name : null;
            return $product;
        });

    // Search for services and eager load business name
    $service = Service::where('service_name', 'like', '%' . $query . '%')
        ->with('business')  // Eager load the related business
        ->get()
        ->map(function ($service) {
            // Add business_name to each service
            $service->business_name = $service->business ? $service->business->business_name : null;
            return $service;
        });

        $results = [
            'product' => $product,
            'service' => $service,
        ];

        return response()->json($results);
    }

    public function reviews(Request $request)
    {

        $categories = Category::orderBy('id', 'DESC')->get();

        $search = $request->input('search');
        $businesses = Business::when($search, function($query) use ($search) {
            return $query->where('business_name', 'like', '%'.$search.'%')
                         ->orWhere('description', 'like', '%'.$search.'%');
        })
        ->orderBy('id', 'DESC')
        ->paginate(10);
        $bestCompanies = Business::take(15)->orderBy('total_rating','DESC')->get(['business_name', 'logo','id']);
        $topCategories = Category::take(15)->get(['category_name','category_icon']);
      


        return view('consumer.themes.reviews.reviews', compact('businesses', 'categories','search','bestCompanies','topCategories'));
    }

    public function reviewsCompany(Request $request)
    {

        $categories = Category::orderBy('id', 'DESC')->get();

        $businesses = Business::where('business_name', 'like', '%' . $request->company . '%')->orderBy('id', 'DESC')->get();

        return view('consumer.themes.reviews.review_company', compact('businesses', 'categories'));
    }

    public function reviewsCompanyCategory(Request $request)
    {

        if ($request->categoryId == 'all') {

            $categories = Category::orderBy('id', 'DESC')->get();

            $businesses = Business::orderBy('id', 'DESC')->get();
        } else {
            $category = Category::where('category_name', $request->categoryName)->first();

            $categories = Category::orderBy('id', 'DESC')->get();

            $businesses = Business::where('category_id', $category->id)->orderBy('id', 'DESC')->get();
        }

        return view('consumer.themes.reviews.category',  compact('businesses', 'categories'));
    }

    public function review($business_id)
    {

        $business = Business::with('products', 'services', 'reviews')->find($business_id);
        return view('consumer.themes.reviews.review', compact('business'));
    }

    public function businessReviewReported($business_id)
    {

        return view('consumer.themes.review_report.business_review_report', compact('business_id'));
    }

    public function storebusinessReviewReported(Request $request, $business_id)
    {

        $business = BusinessReview::find($business_id);
        $business->review_reason = $request->reason;
        $business->status = 2;
        $business->save();

        Session::flash('success', 'Report sent successfull!');
        return redirect('business/reviews/' . $business->business_id);
    }

    public function categories()
    {

        $data  = Category::orderBy('id', 'DESC')->get();

        return view('consumer.themes.categories', compact('data'));
    }

    public function categoryBusinesses($category_name)
    {

        $data = Category::orderBy('id', 'DESC')->get();

        // $categoryCompany = Category::where('category_name', $category_name)->first()->business;
        $categoryCompany = Category::where('category_name', $category_name)
            ->with(['business' => function ($query) {
                $query->where('display', 1);
                $query->where('status', 1);
            }])
            ->first();

        $categories = Category::take(10)->get();

        return view('consumer.themes.category_companies', compact('data', 'categoryCompany', 'categories'));
    }

    public function terms()
    {
        return view('consumer.user.terms');
    }

    public function register()
    {

        $regions = Region::get();

        return view('consumer.user.register', compact('regions'));
    }

    public function registerProcess(Request $request)
    {

        $phone = $request->phone;

        // Check if the number starts with '255'
        if (substr($phone, 0, 3) === '255') {
            // Remove '255' and add '0' at the beginning
            $phone = '0' . substr($phone, 3);
        }

        $credentials = [
            'email' => $request->email,
            'phone' => $phone,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'region_id' => $request->region_id,
            'gender' => $request->gender,
            'dob' => $request->dob,
        ];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleByName('consumer');
        $role->users()->attach($user->id);

        $credentials = array(
            "email" => $request->email,
            "password" => $request->password,
        );

        $user = Sentinel::authenticate($credentials);

        Mail::to($user->email)->send(new RegisterMail());

        Session::flash('success', 'Registered  successfull!');

        return redirect('/login');

        // if ($user)
        // {
        //     // Mail::to($user->email)->send(new RegisterMail());

        //     if(Session::get('type') == 'business')
        //     {
        //         return redirect('consumer/business/write-review/'.Session::get('company_id'));
        //     }
        //     if(Session::get('type') == 'product')
        //     {
        //         return redirect('consumer/product/write-review/'.Session::get('product_id'));
        //     }
        //     if(Session::get('type') == 'service')
        //     {
        //         return redirect('consumer/service/write-review/'.Session::get('service_id'));
        //     }
        // }

        // Session::flash('success', 'Registered  successfull!');
        // return redirect('/login');

    }

    public function productReviewReported($review_id)
    {

        return view('consumer.themes.review_report.product_review_report', compact('review_id'));
    }

    public function storeproductReviewReported(Request $request, $review_id)
    {

        $product = ProductReview::find($review_id);
        $product->review_reason = $request->reason;
        $product->status = 2;
        $product->save();

        Session::flash('success', 'Report sent successfull!');
        return redirect('consumer/product/read-more/' . $product->product_id);
    }

    public function serviceReviewReported($review_id)
    {

        return view('consumer.themes.review_report.service_review_report', compact('review_id'));
    }

    public function storeserviceReviewReported(Request $request, $review_id)
    {

        $service = ServiceReview::find($review_id);
        $service->review_reason = $request->reason;
        $service->status = 2;
        $service->save();

        Session::flash('success', 'Report sent successfull!');
        return redirect('consumer/service/read-more/' . $service->service_id);
    }

    // added function by frontend developer - nuhu
    public function AboutUs(){
        return view('consumer.themes.about_us');
    }

    public function previewTerms($language)
    {
        // Set the file name based on the language
        if ($language === 'Sheria_na_Masharti') {
            $fileName = 'Sheria_na_Masharti.pdf';
        } else {
            $fileName = 'Terms_and_Conditions_for_Reviewers.pdf';
        }

        $filePath = public_path("files/{$fileName}");

        if (!file_exists($filePath)) {
            abort(404, "File not found.");
        }

        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
        ]);
    }

    public function previewPrivacyPolicy($language)
    {
        // Set the file name based on the language
        if ($language === 'Sera_ya_Faragha') {
            $fileName = 'Sera_ya_Faragha.pdf';
        } else {
            $fileName = 'Privacy_Policy_for_Reviewers.pdf';
        }

        $filePath = public_path("files/{$fileName}");

        if (!file_exists($filePath)) {
            abort(404, "File not found.");
        }

        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
        ]);
    }

    public function aboutUsBusiness(){
        return   view('business_fontend.about-us');
    }

    public function whyUsBusiness(){
        return   view('business_fontend.why-us');
    }
    
    
    
    public function contactBusiness(){
        return   view('business_fontend.contact');
    }


    public function pricingBusiness(){
        return view('business_fontend.pricing');
    }
    


}
>>>>>>> 82979f0 (category implemented successfully)
