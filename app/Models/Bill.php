<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function bill_data($pd, $hsn, $qty,$unit,$weight,$rate,$taxableval)
    {
        if(is_array($pd) and is_array($hsn) and  is_array($qty) and is_array($unit) and is_array($weight) and is_array($rate) and is_array($taxableval))
        {
            foreach($pd as $k=>$p){
            BillData::create(
                [
                    'bill_id'=>$this->id,
                    'product'=>$pd[$k]??'',
                    'hsn'=>$hsn[$k]??'',
                    'qty'=>$qty[$k]??0,
                    'unit'=>$unit[$k]??'',
                    'weight'=>$weight[$k]??0,
                    'rate'=>$rate[$k]??0,
                ]
            );
        }
        }
    }

    public function vendore()
    {
       return $this->belongsTo(Vendor::class,'shop_id');
    }

    public function company()
    {
        return $this->hasMany(VendoreCompanyDetails::class,'id','shop_company_id');
    }
    public function bank()
    {
        return $this->hasOne(VendoreBankDetail::class,'company_id','shop_company_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id','id');
    }

    public function billdatas()
    {
       return $this->hasMany(BillData::class,'bill_id');
    }

    public function currency()
    {
       return $this->belongsTo(Currency::class,'bill_currency_id');
    }
}
