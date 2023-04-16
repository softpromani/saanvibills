<?php

namespace App\Http\Controllers\shop;

use App\Events\InvoiceSent;
use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class InvoiceController extends Controller
{
    public function invoice($id)
    {
        
        $bills = Bill::find(Crypt::decrypt($id));
        return view('invoice.invoice',compact('bills'));
    }
    public function invoice_edit()
    {
        return view('invoice.edit_invoice');
    }
    public function send_bill_on_email($id)
    {
       $bill=Bill::find($id);
       if($bill){
            InvoiceSent::dispatch($bill);
            Session::flash('success','Email send');
            return redirect()->back();
       }
       else
       {
        Session::flash('error','Bill Not Found');
        return redirect()->back();
       }
    }
}
