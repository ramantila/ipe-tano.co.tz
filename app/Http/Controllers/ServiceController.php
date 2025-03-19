<?php

namespace App\Http\Controllers;

use App\Mail\IncompleteForm;
use App\Models\Business;
use App\Models\Service;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Session;

class ServiceController extends Controller
{
    public function index($business_id){

        $services = Service::where('business_id',$business_id)->get();

        return view('admin.services.index', compact('business_id','services'));

   }

   public function create($business_id){
       
       return view('admin.services.create', compact('business_id'));
   }

   public function store(Request $request, $business_id){

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
      $service->user_id = $business->user_id;
      $service->business_id = $business->id;
      $service->logo = $filename;
      $service->save();

      Session::flash('success', 'Service added successfull!');
      return redirect('businesses/'.$business_id.'/service/view');

   }

   public function missedForm(){

       $forms = Business::with('user')->where('letter', '=', null)
       ->where('business_licence', '=', null)
       ->where('company_reg', '=', null)
       ->get();

       foreach($forms as $form){

         Mail::to('65ntila@gmail.com')->send(new IncompleteForm($form));

       }

   }

   public function edit($serviceId){
        $service = Service::find($serviceId);
        return view('admin.services.edit', compact('service'));
   }

   public function update($productId, Request $request)
   {
       // Find service, return error if not found
       $service = Service::find($productId);
       if (!$service) {
           return redirect()->back()->with('error', 'Service not found.');
       }
   
       // Handle file upload
       if ($request->hasFile('service_logo')) {
           $file = $request->file('service_logo');
           $destinationPath = 'images/service'; // Upload path
           $filename = 'service/' . date('YmdHis') . "." . $file->getClientOriginalExtension();
           $file->move(public_path($destinationPath), $filename);
           $service->logo = $filename; // Update logo if new file uploaded
       }
   
       // Update other service details
       $service->service_name = $request->service_name;
       $service->description = $request->description;
       $service->save();
   
       Session::flash('success', 'Service updated successfull!');
       return redirect('businesses/'.$service->business_id.'/service/view');
   }
}
