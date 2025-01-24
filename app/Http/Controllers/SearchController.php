<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        // Get the search terms from the request
        $businessName = $request->input('business_name');
        $productService = $request->input('product_service');

        // Query the database
        $results = Business::where('business_name', 'like', "%$businessName%")
            ->get();

        // Return the results as JSON to be used in the frontend
        return response()->json($results);
    }
}
