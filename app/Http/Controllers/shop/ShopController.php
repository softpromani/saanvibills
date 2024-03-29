<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
Use Alert;
use App\Models\Bill;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RahulHaque\Filepond\Facades\Filepond;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }
    public function show()
    {
       $vandors = Vendor::get();
        return view('shop.view',compact('vandors'));
    }
    public function store(Request $request)
    {
       $request->validate([
        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required|email',
        'mobile'=>'required|numeric',
        'password'=>'required',
        'cpassword'=>'required:password|same:password|min:6',
       ]);
       $data=Vendor::create([
        'fname' => $request->fname,
        'lname' => $request->lname,
        'email' => $request->email,
        'phone' => $request->mobile,
        'password' => Hash::make($request->password),
       ]);
       if($data){
            return back()->with('toast_success','Vendor Register Successfully!');
       }else{
            return back()->with('toast_error','Vendor Not Created!');
       }

    }

    public function vendore_details(Request $request)
    {
        dd(Filepond::field($request->clogo));
    }
    public function bill_show(){
        $bill_data=Bill::where('shop_id',Auth::guard('shop')->user()->id)->latest()->paginate(10);
        return view('shop.view_bill',compact('bill_data'));
    }
}
