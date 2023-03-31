<?php

namespace App\Http\Livewire;

use App\Helpers\Helper;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\ShopHasCustomer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class GenerateBill extends Component
{
    public $pd, $hsn, $qty,$unit,$weight,$rate,$taxableval;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $search;
    public $count=2;
    public $search_customer_val;
    public Customer $customer;

    public $invoice;
    public  $date;
    public $total_amount=0.00;
    public $total_weight=0;
    protected $rules=[
        'customer.full_name'=>'required',
        'customer.mobile'=>'required',
        'customer.tin_no'=>'required',
        'pd'=>'required|array',
        'pd.*'=>'required|max:100',
        'hsn'=>'required|array',
        'hsn.*'=>'required|min:2',
        'qty'=>'required|array',
        'qty.*'=>'required|numeric',
        'unit'=>'required|array',
        'unit.*'=>'required',
        'weight.*'=>'required|numeric',
        'rate.*'=>'required|numeric',
        'taxableval.*'=>'required',
        'total_amount'=>'required|numeric',
        'total_weight'=>'required|numeric'

    ];

    public function updated()
    {
       $this->calculate();
    }
    public function render()
    {
        $this->invoice=Auth::guard(Helper::getGuard())->user()->new_invoice;
        $this->date=Carbon::now()->format('Y-m-d');
        if(!empty($this->inputs) and count($this->inputs)>0){
            $this->calculate();
        }
      
        return view('livewire.generate-bill')->extends('master');
    }

    public function add_bill_field($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove_bill_field($i)
    {
        unset($this->inputs[$i]);
       
    }

    public function search_customer()
    {
        $search=$this->search_customer_val;
        // dd($search);
       $this->customer=Auth::guard(Helper::getGuard())->user()->customers->where(function($query) use($search){
        return $query->where('mobile',$search)->orWhere('email',$search);
       })->first();

    }
  
    public function calculate()
    {
        $this->total_amount=0;
        $this->total_weight=0;
       if(!isset($this->pd) || empty($this->pd)){
            return false;
       }
      foreach($this->pd as $k=>$pro){
        if(!isset($pro) || !isset($this->qty[$k]) || !isset($this->rate[$k])){
            return false;
        }
       $this->taxableval[$k]=number_format($this->qty[$k]*$this->rate[$k],2);
       $this->total_amount +=$this->qty[$k]*$this->rate[$k];
      
        
      }
    if($this->weight and count($this->weight)>0){
        $this->total_weight=array_sum($this->weight);
    }

    }


    public function submit()
    {
        $this->validate();
        $r=Bill::create([
            'invoice_no'=>$this->invoice,
            'shop_id'=>Auth::guard(Helper::getGuard())->user()->id,
            'shop_company_id'=>Auth::guard(Helper::getGuard())->user()->vendor_companies->first()->id,
            'customer_id'=>$this->customer->id,
            'vehical_no'=>'',
            'invoice_date'=>$this->date,
            'total_price'=>$this->total_amount,
            'total_weight'=>$this->total_weight,
            'bill_currency_id'=>$this->customer->currency,
            'customer_name'=>$this->customer->full_name,
            'customer_mobile'=>$this->customer->mobile,
            'customer_tpin'=>$this->customer->tin_no
        ]);
        if($r){
            $r->bill_data($this->pd, $this->hsn, $this->qty,$this->unit,$this->weight,$this->rate,$this->taxableval);
            Alert::success('Bill Created Successfully');
        }
        else
        {
            Alert::error('Something Went Wrong');
        }
    }

    public function customer_save()
    {
        dd();
    }

    
}
