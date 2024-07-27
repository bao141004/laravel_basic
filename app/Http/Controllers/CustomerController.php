<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=CustomerModel::all();
        return view('admin.customer.index',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CustomerModel::create($request->all());
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerModel $customer)
    {
        return view('admin.customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( CustomerModel $customer)
    {
        return view('admin.customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , CustomerModel $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerModel $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');

    }
}
