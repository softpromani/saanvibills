<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
}
