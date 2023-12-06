<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Models\Product;

class SearchProductsGet extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $searchTerm = $request->query('q');
        if (empty($searchTerm)) {
            return response()->json(['message' => 'No search query provided'], 400);
        }
        // You'll take value for q and construct a query to the database looking for records with values (or partial values) from name, description, or item number.
        
        try{
           $products = Product::where('name', 'like', '%' . $searchTerm . '%')
        ->orWhere('description', 'like', '%' . $searchTerm . '%')
        ->orWhere('item_number', 'like', '%' . $searchTerm . '%')
        ->get();

        return response()->json(['products' => $products], Response::HTTP_OK);  
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error retrieving products: ' . $e->getMessage()], Response::HTTP_BAD_REQUEST);
    }
    
       
    }
}
