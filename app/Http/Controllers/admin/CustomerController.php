<?php

namespace App\Http\Controllers\admin;

use App\Helpers\Helper;
use App\Helpers\ImageUpload;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\ShopHasCustomer;
use App\Models\TimeZone;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $countries = Country::get();
        $timezones = TimeZone::get();
        $currencies=Currency::get();
       return view('admin.register_customer',compact('countries','timezones','currencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop_has_customer=ShopHasCustomer::with('customer')->get();
        return view('admin.view_customer',compact('shop_has_customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'tin_no'=>'required',
            'pincode'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'address'=>'required',
        ]);

        try{ 
           $customer= Customer::firstOrCreate(
            [
                'tin_no' => $request->tin_no,
                'email'=>$request->email
            ],
            [
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'password'=>Hash::make(123456),
            'mobile'=>$request->mobile,
            'tin_no'=>$request->tin_no,
            'pincode'=>$request->pincode,
            'country_id'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'timezone_id'=>$request->timezone,
            'currency'=>$request->currency,
            'address'=>$request->address,
            'image'=>ImageUpload::simpleUpload('customer',$request->pic,'customer')??'',
        ]);
         $shop_has_customer=ShopHasCustomer::firstOrCreate(
            [
                'shop_id'=>Auth::user()->id,
                'customer_id'=>$customer->id??''
            ],
            [
        
            'shop_id'=>Auth::user()->id,
            'customer_id'=>$customer->id??''
         ]);
        if($shop_has_customer){
            Session::flash('success', 'Customer created successfully');
        
        }
        else{
            Session::flash('error', 'Customer not created');
        
        }
                   
        return redirect()->back(); 
    }
    catch (Exception $ex) {
        Helper::handleError($ex);
        return redirect()->back();
    }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //For show the editing page.

        public function edit($id)
        {
            $id=Crypt::decrypt($id);
            $countries = Country::get();
            $timezones = TimeZone::get();
            $currencies=Currency::get();
            $customer=Customer::find($id);
            if($customer)
            {
                return view('admin.register_customer',compact('countries','timezones','currencies','customer'));
            }
            else
            {
                Session::flash('error','Something Went Wrong OR Data is Deleted');
                return redirect()->back();
            }    }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
         //For update the the edited data.
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',

            ]);
            try
            {
                $customer= Customer::find($id)->update(
                    [
                    'fname'=>$request->fname,
                    'lname'=>$request->lname,
                    'email'=>$request->email,
                    'password'=>Hash::make(123456),
                    'mobile'=>$request->mobile,
                    'tin_no'=>$request->tin_no,
                    'pincode'=>$request->pincode,
                    'country_id'=>$request->country,
                    'state'=>$request->state,
                    'city'=>$request->city,
                    'timezone_id'=>$request->timezone,
                    'currency'=>$request->currency,
                    'address'=>$request->address,
                ]);
            $request->hasFile('pic')?Customer::find($id)->update(['image'=>ImageUpload::simpleUpload('customer',$request->pic,'customer')]):'';
            if($customer)
            {
                    session()->flash('success','Customer updated sucessfully');
                }
                else
                {
                    session()->flash('error','Customer not updated ');
                }
            }
            catch(Exception $ex){
                Helper::handleError($ex);
            }
            return redirect()->back(); 
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=Crypt::decrypt($id);
        try{
                $res=Customer::find($id)->delete();
                if($res)
                {
                    session()->flash('success','Property deleted sucessfully');
                }
                else
                {
                    session()->flash('error','Property not deleted ');
                }
            }
            catch(Exception $ex){
                Helper::handleError($ex);
            }
            return redirect()->back();  
    }
}
