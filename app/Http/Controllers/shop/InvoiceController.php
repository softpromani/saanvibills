<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice()
    {
        $bills = Bill::find(12);
        return view('invoice.invoice',compact('bills'));
    }
    public function invoice_edit()
    {
        return view('invoice.edit_invoice');
    }
}
