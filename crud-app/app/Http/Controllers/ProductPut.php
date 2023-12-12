<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Validators\ProductValidator;
use Illuminate\Http\Response;



class ProductPut extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $data = $request->all();
            $validatedData = ProductValidator::validate($data, 'put');
            $product = Product::find($validatedData['id']);

            if (!$product){
                return response()->json(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
            }
            $product->update($validatedData);
            return response()->json(['product' => $product], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating the product.'], Response::HTTP_NOT_FOUND);
        }

    }
}
