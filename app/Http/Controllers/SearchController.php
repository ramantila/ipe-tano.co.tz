<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $type = $request->input('type');
        $query = $request->input('query');
    
        if (!$type || !$query) {
            return response()->json(['message' => 'Invalid search parameters.'], 400);
        }
    
        if ($type === 'companies') {
            $businesses = DB::table('businesses')
                ->where('business_name', 'LIKE', "%{$query}%")
                ->whereNull('deleted_at')
                ->get();
    
            return response()->json($businesses);
        }
    
        if ($type === 'products') {
            $products = DB::table('products')
                ->join('businesses', 'products.business_id', '=', 'businesses.id')
                ->select('products.id', 'products.product_name', 'businesses.business_name')
                ->where('products.product_name', 'LIKE', "%{$query}%")
                ->whereNull('products.deleted_at')
                ->whereNull('businesses.deleted_at')
                ->get();
    
            return response()->json($products);
        }
    
        if ($type === 'services') {
            $services = DB::table('services')
                ->join('businesses', 'services.business_id', '=', 'businesses.id')
                ->select('services.id', 'services.service_name', 'businesses.business_name')
                ->where('services.service_name', 'LIKE', "%{$query}%")
                ->whereNull('services.deleted_at')
                ->whereNull('businesses.deleted_at')
                ->get();
    
            return response()->json($services);
        }
    
        return response()->json(['message' => 'Invalid search type.'], 400);
    }
    
    
}
