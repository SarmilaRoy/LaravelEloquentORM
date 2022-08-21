<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
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

    public function deleteCustomer($id){
        // echo $id;
        // die;
        // Customer::find($id)->delete();
        // return redirect()->back();

        $deleteCustomer=Customer::find($id);
        if(!is_null($deleteCustomer)){
            $deleteCustomer->delete();
        }
        return redirect('/customer/show');

    }
}
