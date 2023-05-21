<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LutInfo;
use App\Models\VendorDetail;
use App\Models\VendoreCompanyDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LutInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor=VendoreCompanyDetails::where('vendore_id',Auth::guard('shop')->user()->id)->get();
        $lutlist=LutInfo::where('vendore_id',Auth::guard('shop')->user()->id)->latest()->paginate(10);
     return view('shop.view_lut',compact('lutlist','vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'vendore_company'=>'required',
            'year'=>'required',
            'lut'=>'required'
        ]);
        $data=LutInfo::create([
            'vendore_id' =>Auth::guard('shop')->user()->id,
            'vendore_company_id' => $request->vendore_company,
            'year' => $request->year,
            'lut' => $request->lut,
           ]);
           if($data){
                return back()->with('toast_success','Lut Register Successfully!');
           }else{
                return back()->with('toast_error','Lut Not Created!');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
