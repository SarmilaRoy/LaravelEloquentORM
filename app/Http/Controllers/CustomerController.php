<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        return view('customer');
    }
    public function store(Request $request){
        echo '<pre>';
        print_r($request->all());

        $customer=new Customer();
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
        $customer->save();
        session()->flash("msg","Customer has been added Successfully!!");
        return redirect('/customer/show');
        

    }

    public function showCustomer(){
        $customers=Customer::all();
        $data=compact('customers');
        return view('customer-show')->with($data);
    }
}
