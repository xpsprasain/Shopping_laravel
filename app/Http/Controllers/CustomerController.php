<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
//        it call the all the data from the table customer
        $customers= Customer::all();
        return view('customer.index',compact('customers'));
    }


    public function show($id)
    {
        return view('customer.show', ['customer' => Customer::findOrfail($id)]);
    }


    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return redirect('customer/show/'.$customer->customer_id);
    }

}