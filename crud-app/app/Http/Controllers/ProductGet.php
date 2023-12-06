<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Models\Product;

class ProductGet extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke($id) {
        try {
            $product = Product::find($id);
            if(!$product) {
                return response()->json(['message' => 'Product not found.'], Response::HTTP_NOT_FOUND);
            }
            return response()->json(['products' => $product], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error retrieving products: '.$e->getMessage()], 400);
        }


    }
}
