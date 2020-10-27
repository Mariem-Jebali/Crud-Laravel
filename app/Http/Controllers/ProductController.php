<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    public function index()
    {
        
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products')) ;
          
    }

 
    public function create()
    {
        return view ('products.create');
    }

    public function store()
    { 
        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->save();
        return redirect()->route('products.index')
        ->with('success', 'Product created successfully.');
      // return response(null, 201);
       
       /* $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');*/
    }


    public function show(Product $product)
    {
        return view ('products.show',compact('product'));

    }

    public function edit(Product $product)
    {
        return view ('products.edit',compact('product'));

    }

    public function update(Request $request, Product $product)
    {
        $request->validate([ 
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        $product->update($request->all());
        return redirect()-> route('products.index')->with('success','product updated successfully');
    }

 
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','product deleted successfully');

    }
}
