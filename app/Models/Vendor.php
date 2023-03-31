<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function getFullNameAttribute()
    {
      return $this->fname . " " . $this->lname;
    }

    public function customers()
    {
      return $this->belongsToMany(Customer::class,'shop_has_customers','shop_id','customer_id');
    }
    public function vendor_companies()
    {
      return $this->hasMany(VendoreCompanyDetails::class,'vendore_id');
    }
    public function getNewInvoiceAttribute()
    {
      return $this->vendor_companies()->first()->invoice_series.'-'.Carbon::now()->format('Y').'-'.str()->padLeft(Bill::where('shop_company_id',$this->vendor_companies()->first()->id)->whereYear('created_at',Carbon::now('Y'))->count()+1,5,0);
    }
    public function vendor_detail()
    {
      return $this->hasOne(VendorDetail::class,'vendore_id');
    }
}
