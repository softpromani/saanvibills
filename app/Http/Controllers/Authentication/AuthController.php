<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auths.login');
    }
    public function store(Request $request){
       $request->validate([
        'email'=>'required',
        'password'=>'required'
       ]);
 
       $res = Auth::guard('vendor')->attempt([
        'email' => $request->email,
        'password' => $request->password,
        ]);
        if($res){ 
            return redirect()->route('dashboard')->with('toast_success','Vendor login successfully !');
        }else{
            return back()->with('toast_error','Credencials not matched!');
        }
    }
}
