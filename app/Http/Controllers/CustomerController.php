<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        $url=url('/customer');
        $customer=new Customer();
        $title="Customer Registration";
        $data=compact('url','title','customer');
        return view('customer')->with($data);
    }
    public function store(Request $request){
        // echo '<pre>';
        // print_r($request->all());

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

    public function editCustomer($id){
       

        $customer=Customer::find($id);
        if(is_null($customer)){
            return redirect('/customer/show');
            
        }
        else{
            $title="Update Registration";
            $url=url('/customer/update') . "/" .$id;
            $data=compact('customer','url','title');
            return view('customer')->with($data);
            
        }
        

    }
    public function updateCustomer($id,Request $request){
        $updateCustomer=Customer::find($id);
        $updateCustomer->name=$request['name'];
        $updateCustomer->email=$request['email'];
        $updateCustomer->gender=$request['gender'];
        $updateCustomer->address=$request['address'];
        $updateCustomer->state=$request['state'];
        $updateCustomer->country=$request['country'];
        $updateCustomer->dob=$request['dob'];
        $updateCustomer->save();
        session()->flash("msg","Customer has been updated Successfully!!");
        return redirect('/customer/show');
    }
    

}
