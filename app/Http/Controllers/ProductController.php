<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Contact;
use App\Models\Product;

class ProductController extends Controller
{
    public function storeProduct(Request $request) {

    // !changed
        $validated = $request->validate([
            'product_name' => 'required|max:50',
            'short_describe' =>'required|max:150',
            'product_describe' => 'required|max:500',
            'image_path' => 'required|image'
        ]);

        $validated['image_path'] = $request->file('image_path')->store('product');

        Product::create($validated);
    // changed!

        // $image = $request->file('image_path')->store('product');

        // Product::create([
        //     'product_name' => $request->product_name,
        //     'short_describe' => $request->short_describe,
        //     'product_describe' => $request->product_describe,
        //     'image_path' => $image
        // ]);

        return redirect('admin-view');
    }

    public function home() {

        return inertia::render('Home', ['contacts' => Contact::all()]);
    }

    public function product() {

        return inertia::render('Product', [
            'products' => Product::all(),
            'contacts' => Contact::all()
        ]);

        // return inertia::render('Product2', [
        //     'products' => Product::all(),
        //     'contacts' => Contact::all()
        // ]);

    }

    public function aboutUs() {

        return inertia::render('AboutUs', ['contacts' => Contact::all()]);
    }

    public function productList() {

        return Inertia::render('AdminView', [
            'datas' => new ProductResource(Product::paginate(5)),
            'contacts' => Contact::all()
        ]);
    }

    public function editProduct(Product $product) {

        return inertia::render('AdminEditProduct', ['product' => $product]);
    }

    public function updateProduct(Product $product, Request $request) {

    // !changed
        $validated = $request->validate([
            'product_name' => 'required|max:50',
            'short_describe' =>'required|max:150',
            'product_describe' => 'required|max:500',
            'image_path' => 'required|image'
        ]);

        $validated['image_path'] = $request->file('image_path')->store('product');

        $product->update($validated);
    // changed!

        // $newData = Product::findOrFail($product->id);

        // $newData->product_name = $request->product_name;
        // $newData->short_describe = $request->short_describe;
        // $newData->product_describe = $request->product_describe;

        // if($request->file('image_path')) {
        //     $image = $request->file('image_path')->store('product');
        //     $newData->image_path = $image;
        // }


        // $newData->save();

        return redirect('admin-view');
    }

    public function dellProduct(Product $product) {
        if($product->image_path)
            Storage::delete($product->image_path);
        $product->delete();

        return back();
    }

    public function dellImage(Product $product) {
        Storage::delete($product->image_path);
        DB::table('products')->where('id', $product->id)->update(['image_path' => NULL]);

        return back();
    }

}
