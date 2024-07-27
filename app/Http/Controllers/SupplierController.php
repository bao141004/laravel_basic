<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = SupplierModel::all();
        return view('admin.supplier.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supplier.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SupplierModel::create($request->all());
        return redirect()->route('suppliers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SupplierModel $supplier)
    {
        return view('admin.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupplierModel $supplier)
    {
        return view('admin.supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SupplierModel $supplier)
    {
        $supplier->update($request->all());
        return redirect()->route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplierModel $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index');

    }
}
