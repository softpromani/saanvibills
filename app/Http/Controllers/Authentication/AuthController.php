<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
            return redirect()->route('dashboard')->with('toast_success','User login successfully !');
        }else{
            return back()->with('toast_error','Credencials not matched!');
        }
    }

    public function shop_view()
    {
       Session::put('guard','shop');
       return view('auths.login');
    }
    public function shop_login(AuthLoginRequest $req)
    {
        if(Auth::guard('shop')->attempt(['email'=>$req->email,'password'=>$req->password],$req->remember??false)){
            return redirect()->route('shop.dashboard');
        }
        else{
            return back()->with('toast_error','Credencials not matched!');
        }
    }
    public function customer_view()
    {
        Session::put('guard','customer');
        return view('auths.login');
    }
    public function customer_login(AuthLoginRequest $req)
    {
        if(Auth::guard('customer')->attempt(['email'=>$req->email,'password'=>$req->password],$req->remember??false)){
            return redirect()->route('customer.dashboard');
        }
        else{
            return back()->with('toast_error','Credencials not matched!');
        }
    }
    public function admin_view()
    {
        Session::put('guard','admin');
        return view('auths.login');
    }
    public function admin_login(AuthLoginRequest $req)
    {
        if(Auth::guard('admin')->attempt(['email'=>$req->email,'password'=>$req->password],$req->remember??false)){
            return redirect()->route('admin.dashboard');
        }
        else{
            return back()->with('toast_error','Credencials not matched!');
        }
    }
}
