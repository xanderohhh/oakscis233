<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Models\Product;

class ProductsGet extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try{

           $sortBy = $request->query('sortBy') ?? 'name';
           $direction =  $request->query('direction') ?? 'asc';
           $products = Product::orderBy($sortBy, $direction)->get();
           return response()->json(['products' => $products], Response::HTTP_OK);  
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error retrieving products.'], Response::HTTP_BAD_REQUEST);
    }
    
       
    }
}
