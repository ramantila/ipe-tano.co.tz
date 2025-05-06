<?php

namespace App\Http\Controllers;

use App\Mail\BusinessVerification;
use App\Models\Business;
use App\Models\Category;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Session;

class BusinnessController extends Controller
{
    public function index(){

        $businesses = Business::where('claim',0)->orderBy('id','DESC')->get();


        return view('admin.businesses.index',compact('businesses'));
    }

    public  function create(){

        $countries = Country::get();

        $categories = Category::get();

        return view('admin.businesses.create', compact('countries','categories'));

    }

    public function store(Request $request){

        $filename = '';
        if ($request->file('logo_upload') != null ) {
            $files = $request->file('logo_upload');
            $destinationPath = 'images/business'; // upload path
            $filename = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $filename);
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
        // $business->user_id = $request->user_id;
        $business->status = 1;
        $business->display = 1;
        // $business->transfer = 1;
        $business->logo = $filename;
        $business->description = $request->details;
        $business->save();

        Session::flash('success', 'Business added successfull!');
        return redirect('businesses/view');
    }

    public function show($business_id){

        $business = Business::find($business_id);

        return view('admin.businesses.show',compact('business'));

    }

    public function edit($business_id){

        $business = Business::find($business_id);

        $categories = Category::get();

        $countries = Country::get();

        return view('admin.businesses.edit', compact('business','categories','countries'));
    }

    public function update(Request $request, $business_id){

        $filename = '';
        if ($request->file('logo_upload') != null ) {
            $files = $request->file('logo_upload');
            $destinationPath = 'images/business'; // upload path
            $filename = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $filename);
        }

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
        // $business->user_id = $request->user_id;
        // $business->logo = $filename;

        if ($filename != '') {
            $business->logo = $filename;
        }

        $business->description = $request->details;
        $business->save();

        Session::flash('success', 'Business updated successfull!');
        return redirect('businesses/view');
    }

    public function suspend($business_id){
        $business = Business::find($business_id);
        $business->status = 3;
        $business->save();
        Session::flash('success', 'Account suspended successfull!');
        return redirect('businesses/view');
    }

    public function businessVerify($business_id){

        $business = Business::with('user')->find($business_id);
        $business->status = 1;
        $business->verify = 1;
        $business->transfer = 1;
        $business->display = 1;
        if($business->save())
        {
            Mail::to($business->user->email)->send(new BusinessVerification($business));
        }
        Session::flash('success', 'Account verified successfull!');
        return redirect('businesses/view');

    }

    public function delete($business_id){
        $business = Business::find($business_id);
        $business->status = 1;
        $business->save();
        Session::flash('success', 'Account deleted successfull!');
        return redirect('businesses/view');
    }
}
