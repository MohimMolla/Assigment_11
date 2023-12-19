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

    public function sellshow($id)
    {
        $product = Product::find($id);
        return view('admin.product.sell', compact('product'));
    }
    public function sell(Request $request, $productId, $quantity)
    {
        $quantity = $request->input('quantity');
        $product = Product::findOrFail($productId);

        if ($product->quantity >= $quantity) {
            $product->quantity -= $quantity;
            $product->save();

            // Update sales figures or perform other actions

            return redirect('product')->with('message', 'Product sold successfully!');
        } else {
            return redirect()->back()->with('message', 'Insufficient quantity to sell.');
        }
    }
    public function delete($id)
    {
         $product = Product::find($id);
         $product->delete();
         return redirect()->back()->with('message', 'Product Delete successfully.');
    }
}
