<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\Region;
use App\Models\Service;
use App\Models\Terms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Session;

class OwnerController extends Controller
{
    
    public function signUp(){

        $regions = Region::get();

        return view('auth.signup', compact('regions'));

    }

    public function processSignup(Request $request){

        $credentials = [
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'region_id' => $request->region_id,
        ];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleByName('business');
        $role->users()->attach($user->id);

        return redirect('/login');

    }

    public function dashboard(){
        
        $numberofBusiness = Business::where('user_id',Sentinel::getUser()->id)->get();

        if(count($numberofBusiness) > 0)
        {
            $business =  Business::where('user_id',Sentinel::getUser()->id)->first();

            $ratings = Business::select('total_rating')->where('user_id',Sentinel::getUser()->id)->get();

            $ratingsData = [
                'Very good' => $ratings->where('total_rating', 5)->count(),
                'Good' => $ratings->where('total_rating', 4)->count(),
                'Okay' => $ratings->where('total_rating', 3)->count(),
                'Bad' => $ratings->where('total_rating', 2)->count(),
                'Terrible' => $ratings->where('total_rating', 1)->count(),
            ];
            
            $reviews = BusinessReview::where('business_id', $business->id)->with('user')->get();
    
            $genderCounts = [
                'Male' => 0,
                'Female' => 0
            ];
        
            foreach ($reviews as $review) {
                if ($review->user->gender === 'male') {
                    $genderCounts['Male']++;
                } elseif ($review->user->gender === 'female') {
                    $genderCounts['Female']++;
                }
            }
        
            $totalReviews = array_sum($genderCounts);
        
            $genderPercentages = [
                'Male' => ($genderCounts['Male'] / $totalReviews) * 100,
                'Female' => ($genderCounts['Female'] / $totalReviews) * 100
            ];

            return view('owner.dashboard',
             compact(
                'ratingsData',
                'genderPercentages'
             ));
        }
        else
        {
             $agree = Terms::where('user_id',Sentinel::getUser()->id)
                    ->Orwhere('user_id',Sentinel::getUser()->createdby)->get();

            return view('owner.overview',compact('agree'));
        }
        
    }

    public function claimBusiness(){
        return view('owner.overview');
    }

    public function readTerms(){
        return view('owner.terms');
    }

    public function termsCondition(){

        return view('owner.business.terms');

    }

    public function indexBusiness(){

        //  $businesses = Business::where('user_id', Sentinel::getUser()->id)->where('status','=','3')->get();
         $businesses = Business::where('claim',0)->where('user_id','=',Sentinel::getUser()->id)->get();

        return view('owner.business.index',compact('businesses'));

    }

    public function showBusiness($business_id){

        $business = Business::find($business_id);

        return view('owner.business.show', compact('business','business_id'));
    }

    // public function createBusiness(){

    //     $countries = Country::get();

    //     $categories = Category::get();

    //     return view('owner.business.create', compact('countries','categories'));

    // }

    public function stepBusinessInfo(){

        $countries = Country::get();

        $categories = Category::get();

        return view('owner.business.step_businessinfo', compact('countries','categories'));

    }

    public function storeBusinessInfo(Request $request){

        $business = new Business();
        $business->business_name = $request->businessname;
        $business->business_registration = $request->registration;
        $business->category_id = $request->category_id;
        $business->country_id = $request->country_id;
        $business->business_email = $request->email;
        $business->business_phone = $request->phone;
        $business->headquarters = $request->headquarter;
        $business->website = $request->website;
        $business->slogan = $request->slogan;
        $business->description = $request->description;
        $business->status = 1;
        // $business->account = 0;
        // $business->claim = 1;
        $business->user_id = Sentinel::getUser()->id;
        // $business->user_id = 1;
        $business->logo = $request->logo_upload;
        $business->job = $request->job;
        $business->save();

        Session::put("business_claim_id",$business->id); 
        // Session::flash('success', 'Business added successfull!');
        return redirect()->route('owner.business.step_download',compact('business'));

    }

    public function stepDownload(){

        return view('owner.business.step_download');

    }

    public function stepUpload(){

        return view('owner.business.step_upload');
    }

    public function storeStepUpload(Request $request){

        $letter = '';
        $licence = '';
        $registration = '';
        $business_id = Session::get('business_claim_id');

        if ($files = $request->file('letter')) {
            $destinationPath = 'images/document'; // upload path
            $letter = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $letter);
        }


        if ($files = $request->file('business_licence')) {
            $destinationPath = 'images/document'; // upload path
            $licence = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $licence);
        }

        if ($files = $request->file('company_reg')) {
            $destinationPath = 'images/document'; // upload path
            $registration = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $registration);
        }

        $business =  Business::find($business_id);
        $business->	letter = $letter;
        $business->business_licence = $licence;
        $business->company_reg = $registration;
        $business->save();

        Session::forget('business_claim_id');
        Session::flash('success', 'Business added successfull!');
        return redirect('business/view');

    }

    public function storeBusiness(Request $request){

        $letter = '';
        $licence = '';
        $registration = '';

        if ($files = $request->file('letter')) {
            $destinationPath = 'images/document'; // upload path
            $letter = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $letter);
        }


        if ($files = $request->file('business_licence')) {
            $destinationPath = 'images/document'; // upload path
            $licence = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $licence);
        }

        if ($files = $request->file('company_reg')) {
            $destinationPath = 'images/document'; // upload path
            $registration = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $registration);
        }

        $business = new Business();
        $business->business_name = $request->businessname;
        $business->business_registration = $request->registration;
        $business->category_id = $request->category_id;
        $business->country_id = $request->country_id;
        $business->business_email = $request->email;
        $business->business_phone = $request->phone;
        $business->headquarters = $request->headquarter;
        $business->website = $request->website;
        $business->slogan = $request->slogan;
        $business->status = 1;
        $business->account = 1;
        // $business->user_id = Sentinel::getUser()->id;
        $business->user_id = 1;
        $business->logo = $request->logo_upload;
        $business->description = $request->details;
        $business->	letter = $letter;
        $business->business_licence = $licence;
        $business->company_reg = $registration;
        $business->save();

        Session::flash('success', 'Business added successfull!');
        return redirect('business/view');

    }

    public function editBusiness($business_id){

        $countries = Country::get();

        $categories = Category::get();

        $business = Business::find($business_id);

        return view('owner.business.edit', compact('countries','categories','business'));
    }

    public function updateBusiness(Request $request, $business_id){

        $business = Business::find($business_id);
        $business->business_name = $request->businessname;
        $business->business_registration = $request->registration;
        $business->category_id = $request->category_id;
        $business->country_id = $request->country_id;
        $business->business_email = $request->email;
        $business->business_phone = $request->phone;
        $business->headquarters = $request->headquarter;
        $business->website = $request->website;
        $business->slogan = $request->slogan;
        $business->status = 1;
        // $business->account = 1;
        // $business->user_id = Sentinel::getUser()->id;
        $business->user_id = 1;
        $business->logo = $request->logo_upload;
        $business->description = $request->details;
        // $business->	letter = $letter;
        // $business->business_licence = $licence;
        // $business->company_reg = $registration;
        $business->save();

        Session::flash('success', 'Business updated successfull!');
        return redirect('business/view');
    }

    public function indexProduct($business_id){

        $products = Product::where('business_id',$business_id)->get();

        return view('owner.products.index', compact('products','business_id'));

    }

    public function createProduct($business_id){

        return view('owner.products.create', compact('business_id'));

    }

    public function storeProduct(Request $request, $business_id){

        $business = Business::find($business_id);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->user_id = Sentinel::getUser()->id;
        // $product->user_id = 2;
        $product->business_id = $business->id;
        // $product->logo = $business->product_logo;
        $product->save();
 
        Session::flash('success', 'Product added successfull!');
        return redirect('business/'.$business_id.'/product/view');

    }

    public function indexService($business_id){

        $services = Service::where('business_id',$business_id)->get();

        return view('owner.services.index', compact('business_id','services'));

    }

    public function createService($business_id){

        return view('owner.services.create', compact('business_id'));

    }

    public function storeService(Request $request, $business_id){

        $business = Business::find($business_id);
        $filename = '';
        if ($files = $request->file('service_logo')) {
            $destinationPath = 'images/service'; // upload path
            $filename = 'service/'.date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $filename);
        }

        $service = new Service();
        $service->service_name = $request->service_name;
        $service->description = $request->description;
        // $service->user_id = Sentinel::getUser()->id;
        $service->user_id = 2;
        $service->business_id = $business->id;
        $service->logo = $filename;
        $service->save();
 
        Session::flash('success', 'Services added successfull!');
        return redirect('business/'.$business_id.'/service/view');

    }

    public function storeTerms(Request $request){

        $terms = new Terms();
        $terms->user_id = Sentinel::getUser()->id;
        $terms->agree = $request->agree;
        $terms->save();

        Session::flash('success', 'You have agree successfull');
        return redirect('dashboard/business');
    }

    public function createClaimsBusiness(){

        $businessname = '';

        return view('owner.claims.create', compact('businessname'));

    }

    public function searchClaimsBusiness(Request $request){

        $businessname = $request->businessname;

        $claims = Business::where('business_name','like', '%'.$businessname.'%')->get();

        return view('owner.claims.create', compact('claims','businessname'));

    }

    public function claimsDetailsBusiness($claim_id){

        $claimdetails = Business::find($claim_id);

        return view('owner.claims.claimsDetails', compact('claim_id','claimdetails'));
        
    }

    public function storeClaimsBusiness(Request $request, $claim_id){

        $letter = '';
        $licence = '';
        $registration = '';

        if ($files = $request->file('letter')) {
            $destinationPath = 'images/document'; // upload path
            $letter = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $letter);
        }


        if ($files = $request->file('business_licence')) {
            $destinationPath = 'images/document'; // upload path
            $licence = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $licence);
        }

        if ($files = $request->file('company_reg')) {
            $destinationPath = 'images/document'; // upload path
            $registration = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $registration);
        }

        $business = Business::find($claim_id);
        $business->business_title = $request->businesstitle;
        $business->business_registration = $request->registration;
        $business->business_email = $request->email;
        $business->business_phone = $request->phone;
        $business->job = $request->job;
        $business->claim = 1;
        $business->user_id = Sentinel::getUser()->id;
        $business->	letter = $letter;
        $business->business_licence = $licence;
        $business->company_reg = $registration;
        $business->save();

        Session::flash('success', 'Application has been sent successfully');
        return redirect('claims/view');

    }

    public function indexClaimsBusiness(){

        $claims = Business::where('claim',1)->get();
        // $claims = Business::where('user_id', Sentinel::getUser()->id)->where('claim',1)->get();

        return view('owner.claims.index',compact('claims'));

    }

    public function indexReviews(){

        $reviews = DB::table('businesses')
                        ->join('business_reviews', 'businesses.id', '=', 'business_reviews.business_id')
                        ->join('users', 'users.id', '=', 'businesses.user_id')
                        ->where('businesses.user_id', Sentinel::getUser()->id)
                        ->get();
        
        return view('owner.review.index', compact('reviews'));                

    }

    public function indexProductReviews($business_id){

        return $reviews = Product::whereHas('business', function ($query) use ($business_id) {
            $query->where('id', $business_id);
        })->with('serviceReview')->get();

        return view('owner.review.product.index');

    }

    public function indexServiceReview(){

        return view('owner.review.service.index');

    }

    public function incompleteBusinesInfo($business_id){

        $business = Business::find($business_id);

        $categories = Category::get();

        $countries = Country::get();

        return view('owner.incomplete.step_businessinfo',compact('business','categories','countries','business_id'));
        
    }

    public function storeincompleteBusinesInfo(Request $request, $business_id){

        $business = Business::find($business_id);
        $business->business_name = $request->businessname;
        $business->business_registration = $request->registration;
        $business->category_id = $request->category_id;
        $business->country_id = $request->country_id;
        $business->business_email = $request->email;
        $business->business_phone = $request->phone;
        $business->headquarters = $request->headquarter;
        $business->website = $request->website;
        $business->slogan = $request->slogan;
        $business->status = 1;
        $business->account = 1;
        $business->user_id = Sentinel::getUser()->id;
        // $business->user_id = 1;
        $business->logo = $request->logo_upload;
        $business->job = $request->job;
        $business->save();

        // Session::put("business_claim_id",$business->id); 
        // Session::flash('success', 'Business added successfull!');
        return redirect()->route('owner.incomplete.step_download',compact('business_id'));

    }

    public function incompleteDownload($business_id){

        return view('owner.incomplete.step_download',compact('business_id'));

    }

    public function incompleteUpload($business_id){

        return view('owner.incomplete.step_upload',compact('business_id'));

    }

    public function storeincompleteUpload(Request $request, $business_id){

        $letter = '';
        $licence = '';
        $registration = '';

        if ($files = $request->file('letter')) {
            $destinationPath = 'images/document'; // upload path
            $letter = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $letter);
        }


        if ($files = $request->file('business_licence')) {
            $destinationPath = 'images/document'; // upload path
            $licence = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $licence);
        }

        if ($files = $request->file('company_reg')) {
            $destinationPath = 'images/document'; // upload path
            $registration = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $registration);
        }

        $business =  Business::find($business_id);
        $business->letter = $letter;
        $business->business_licence = $licence;
        $business->company_reg = $registration;
        $business->save();
        Session::flash('success', 'Business completed successfull!');
        return redirect('business/view');
    }

}
