<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    public function address(){
        $address = Address::where('user_id',session('customer.id'))->get();
        return  view('frontend.myaccount_address',compact('address'));
    }

    public function addresssave(Request $request){
        $messages = [
            'first_name.required' =>'Please provide a First Name ',
            'last_name.required' =>'Please provide a Last Name',
            'email.required' =>'Please provide a Email',
            'mobile_no.required' =>'Please provide a Mobile No',
            'address.required' =>'Please provide a Address',
            'city.required' =>'Please provide a City',
            'state.required' =>'Please provide a State',
            'country.required' =>'Please provide a Country',
            'pincode.required' =>'Please provide a Pincode'
        ];
        
        $validator = Validator::make($request->all(), [
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required|email',
            'mobile_no' =>'required',
            'address' =>'required',
            'city' =>'required',
            'state' =>'required',
            'country' =>'required',
            'pincode' =>'required'
        ], $messages);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(),'status'=>'failed']);
        }

    
        $address = new Address();
        $address->user_id = $request->user_id;
        $address->first_name = $request->first_name;
        $address->last_name = $request->last_name;
        $address->email = $request->email;
        $address->mobile_no = $request->mobile_no;
        $address->address = $request->address;
        $address->address2 = $request->address2;
        $address->country = $request->country;
        $address->state = $request->state;
        $address->city = $request->city;
        $address->pincode = $request->pincode;
        $address->save();
        return response()->json(['status' => '200','address' => $address]);
    }
}
