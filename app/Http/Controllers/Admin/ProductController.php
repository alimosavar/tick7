<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Product\ProductStoreRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.list-product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
//        dd(($request->input('description')));

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path('/uploadImages/products/');
            $file->move($path, $fileName);
        }

        $product = new Product();
        $product->user_id = auth()->user()->id;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        if (isset($fileName))
            $product->photo = '/uploadImages/products/' . $fileName;
        $product->status = $request->input('status');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->save();

        Session::flash('create', 'محصول مورد نظر شما با موفقیت درج گردید.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit-product', compact('product'));
    }

    public function com()
    {
        return view('admin.index.comments');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductStoreRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('pic')) {
            if ($product->photo) {
                unlink(public_path($product->photo));
            }
            $file = $request->file('pic');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path('/uploadImages/products/');
            $file->move($path, $fileName);
        }
        $product->user_id = auth()->user()->id;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        if (isset($fileName))
            $product->photo = '/uploadImages/products/' . $fileName;
        $product->status = $request->input('status');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->save();

        Session::flash('edit', 'محصول مورد نظر شما با موفقیت به روزرسانی گردید.');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Session::flash('delete', 'محصول مورد نظر شما با موفقیت حذف گردید.');
        return redirect()->route('product.index');
    }

    public function search(Request $request)
    {
        $searchText = $request->input('search');
        $products = Product::where('name', 'like', '%' . $searchText . '%')->latest()->paginate(10);
        return view('admin.products.search-product', compact('products'));
    }
}
