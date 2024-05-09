<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
// use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public $name;
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $Customer=new Customer;
        $Customer->name=$request['name'];
        $Customer->cus_id=$request['phone'];
        $Customer->email=$request['email'];
        $Customer->address=$request['address'];
        // 'card_no' => mt_rand(100000000000, 999999999999);
        $Customer->card_no=mt_rand(100000000000, 999999999999);
        $Customer->save();
        return redirect('/homepage');
    }
    public function check(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
        ]);

        // Retrieve the admin record from the database based on the provided admin ID
        $Customer = Customer::where('email', $validatedData['email'])->first();
        
        // return view('PackageSelection')->with('name',$name);
        // Check if an admin record was found
        if ($Customer) {
            $name=$Customer->name;
            return view('Plan')->with('name',$name);
            return view('PackageSelection')->with('name',$name);
        } else {
            // Admin ID not found, redirect back with an error message
            return redirect('/homepage/UserRegister');
        }
    }
    public function package($plan){
        return view('PackageSelection', ['plan' => $plan]);
    }
   
}
