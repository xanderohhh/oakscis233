<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Models\Validators\ProductValidator;
use \App\Models\Product;

class ProductPost extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {

        try {
            $data = $request->all();
            $validatedData = ProductValidator::validate($data, 'post');
            $product = Product::create($validatedData);
            return response()->json(['product' => $product], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating the product: '.$e->getMessage()], 400);
        }


    }
}
