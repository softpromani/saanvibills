<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\State;
use App\Models\TimeZone;
use App\Models\Vendor;
use App\Models\VendorDetail;
use App\Models\VendoreCompanyDetails;
use App\Models\VendoreBankDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShopDetailsController extends Controller
{
    public function store(Request $request)
    {
       $request->validate([
        'cname'=>'required',
        'clogo'=>'required',
        'stamplogo'=>'required',
        'profile'=>'required',
       ]);
       if ($request->hasFile('clogo')) {
                $clogo = time() . rand(1, 10000) . '.' . $request->clogo->extension();
                $request->clogo->storeAs('shop/companylogo',$clogo);
            }
       if ($request->hasFile('stamplogo')) {
                $stamplogo = time() . rand(1, 10000) . '.' . $request->stamplogo->extension();
                $request->stamplogo->storeAs('shop/stamplogo', $stamplogo);
            }
       if ($request->hasFile('profile')) {
                $profile = time() . rand(1, 10000) . '.' . $request->profile->extension();
                $request->profile->storeAs('shop/profile', $profile);
            }
       VendorDetail::create([
        'vendore_id' => Auth::guard('vendor')->id(),
        'company_name' => $request->cname,
        'logo' => $clogo,
        'satamp_logo' => $stamplogo,
        'profile_image' => $profile,
       ]);

       Vendor::find(Auth::guard('vendor')->id())->increment('step');
       return back()->with('toast_success','Vendor Basic Information added Successfully!');
    }

    public function dashboard()
    {
        $currencies=Currency::get();
        $timezones=TimeZone::get();
        $cities=City::get();
        $countries=Country::get();
        $states=State::get();
        return view('shop.dashboard',compact('currencies','timezones','countries'));
    }

    public function vendoreinfo(Request $request)
    {

        $request->validate([
            'timezone'=>'required',
            'currency'=>'required',
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'vaddress'=>'required',
            'signature'=>'required',
           ]);
           if ($request->hasFile('signature')) {
                    $signature = time() . rand(1, 10000) . '.' . $request->signature->extension();
                    $request->signature->storeAs('shop/signature', $signature);
                }
           VendorDetail::find(Auth::guard('vendor')->id())->update([
            'time_zone'=>$request->timezone,
            'currency'=>$request->currency,
            'vendor_name'=>$request->name,
            'vendore_email'=>$request->email,
            'vendore_mobile'=>$request->mobile,
            'signature'=>$signature,
            'vendore_address'=>$request->vaddress,
           ]);

           Vendor::find(Auth::guard('vendor')->id())->increment('step');
           return back()->with('toast_success','Vendor Basic Information added Successfully!');
    }


    public function vendorecompany(Request $request)
    {
        $request->validate([
            'cname'=>'required',
            'cseries'=>'required',
            'countrie'=>'required',
            'state'=>'required',
            'city'=>'required',
            'pincode'=>'required',
            'gstin_tan_pan'=>'required',
            'iec'=>'required',
            'companyaddress'=>'required',
        ]);
        $id=Auth::guard('vendor')->id();
        $data_id =VendoreCompanyDetails::create([
            'vendore_id'=>$id,
            'owner_id'=>$id,
            'created_by'=>$id,
            'company_name'=>$request->cname,
            'company_address'=>$request->companyaddress,
            'invoice_series'=>$request->cseries,
            'city'=>$request->city,
            'state'=>$request->state,
            'country'=>$request->countrie,
            'pin'=>$request->pincode,
            'gstin_tan_pan'=>$request->gstin_tan_pan,
            'iec'=>$request->iec,
        ]);
        Session::put('vendoredetails', $data_id);
        Vendor::find(Auth::guard('vendor')->id())->increment('step');
        return back()->with('toast_success','Vendor Company Details added Successfully!');
    }
    public function vendorebank(Request $request)
    {
        $request->validate([
            'bankname'=>'required',
            'bankbranch'=>'required',
            'ifsc'=>'required',
            'company_id'=>'required',
            'accountno'=>'required',
            'adcode'=>'required',
        ]);
        $id=Auth::guard('vendor')->id();
        VendoreBankDetail::create([
            'vendore_id'=>$id,
            'owner_id'=>$id,
            'created_by'=>$id,
            'company_id'=>$request->company_id,
            'bank_name'=>$request->bankname,
            'bank_branch'=>$request->bankbranch,
            'bank_ifsc'=>$request->ifsc,
            'account_no'=>$request->accountno,
            'ad_code'=>$request->adcode,
        ]);
        Vendor::find(Auth::guard('vendor')->id())->increment('step');
        return back()->with('toast_success','Vendor Company Details added Successfully!');
    }

    public function vendorestate($id)
    {
        $data = State::where('country_id',$id)->get();
        $html ='';

        foreach($data as $dt){
            $html .='<option value="'.$dt->id.'">'.$dt->name.'</option>';
        }
        return $html;
    }

    public function vendorecity($id)
    {
        $data = City::where('state_id',$id)->get();
        $html ='';
        foreach($data as $dt){
            $html .='<option value="'.$dt->id.'">'.$dt->name.'</option>';
        }
        return $html;
    }
}
