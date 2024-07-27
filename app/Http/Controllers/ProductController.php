<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\SupplierModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = ProductModel::all();
        return view('admin.product.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listSup = SupplierModel::all();
        return view('admin.product.create',compact('listSup'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProductModel::create($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductModel $product)
    {
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductModel $product)
    {
        $listSup = SupplierModel::all();
        return view('admin.products.edit', compact('product','listSup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductModel $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductModel $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
