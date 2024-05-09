<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AddProductForm extends Controller
{
    public function insertIntoDb(Request $request)
    {

        request()->validate([

            'product-name' => 'required',
            'product-price' => 'required|integer',
            'kg' => 'required|integer',
            'product-categ' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'


        ]);

        // added photo
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product-images', 'public');
        } else {
            $imagePath = 'product-images/oranges.png';
        }

        
        $product = new Products([
            'name' => $request->input('product-name', 'product name'),
            'kg' => intval($request->input('kg', '1')),
            'price' => intval($request->input('product-price', '1')),
            'category' => intval($request->input('product-categ', '1')),
            'photo' => $imagePath, 
            'description' => $request->input('description', 'product description'),
        ]);

       
        $product->save();

        
        return redirect()->route('addProduct.page')->with('success', 'Produsul a fost adaugat cu succes!');
    }

    public function index()
    {

        
        // toate produsele
        $products = Products::orderBy('product_id', 'desc');
        if (request()->has('search')) {
            $searchTerm = request()->get('search');
            $products->where('name', 'like', "%$searchTerm%");
        }

        
        $products = $products->paginate(12);

        $categories = ProductCategory::all();

        return view('shop-page', ['products' => $products, 'productCategories' => $categories]);
    }
    public function getFourProducts()
    {

        $products = Products::orderBy('product_id', 'desc')->take(4)->get();

        return view('index', ['fourProducts' => $products]);
    }
    public function getSingleProduct($id)
    {

        $product = Products::find($id);
        return view('single-product', [
            'product' => $product
        ]);
    }
    public function adminIndex()
    {
        //get all products
        $products = Products::orderBy('product_id', 'desc')->paginate(12);
        //get all products categories
        $categories = ProductCategory::all();

        return view('admin-all-products', ['products' => $products, 'productCategories' => $categories]);
    }
    public function destroyProduct($id)
    {
        //firstOrFail= in case we fail to find req product
        $product = Products::where('product_id', $id)->firstOrFail();
        $product->delete();
        return redirect('/admin-all-products')->with('success', 'Produsul a fost sters!');
    }
    public function getSingleProductBasedOnName()
    {
        dump(request()->input('search'));
        $productNameToSearch = request()->input('search');
        $product = Products::where('name', 'like', '%' . $productNameToSearch . '%');
        dump($product);
    }
}
