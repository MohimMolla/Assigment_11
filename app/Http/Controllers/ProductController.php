<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.ceate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->all();
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            //'quantity' => 'required',

        ]);
        $product = Product::create($request->all());
        return redirect()->route('product.index')->with("message", "Product Created Success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //$product = Product::find($product);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index')->with("message", "Product Update Success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function sellshow()
    {
        return view('admin.product.sell');
    }
    public function sell($productId, $quantity)
    {
        $product = Product::findOrFail($productId);

        if ($product->quantity >= $quantity) {
            $product->decrement('quantity', $quantity);

            // Update sales figures or perform other actions

            return redirect('/')->with('success', 'Product sold successfully!');
        } else {
            return redirect('/')->with('error', 'Insufficient quantity to sell.');
        }
    }
}
