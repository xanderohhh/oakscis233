<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view("products.index", ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product;
        return view('products.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($this->validatedData($request));
        return redirect()->route('products.index')->with('success', 'Product was successfully added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Product::find($id)->update($this->validatedData($request));
        return redirect()->route('products.index')->with('success', 'Product was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')->with('success', 'Product was deleted.');
    }

    private function validatedData($request)
    {
        return $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'item_number' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
    }
}
