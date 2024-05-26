<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        
        return inertia('Product',[
            'products' => Product::orderBy('name')->get(),
            'categories' => Category::orderBy('name')->get()
        ]);
    }

    public function show(Product $product)
    {
        return Inertia::render('products/view', ['product' => $product]);
    }

    public function create()
    {
        return Inertia::render('products/create', ['categories' => Category::orderBy('name')->get()]);
    }

    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);

        $save = Product::create($request->all());

        return redirect('/products')->with('success', 'Product created successfully');
    }

    public function edit(Product $product) {
        $categories = Category::all(); 
        return inertia('view', ['product' => $product, 'category' => $categories]);
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'category_id' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update($validatedData);

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products')->with('success', 'Product deleted successfully');
    }
}
