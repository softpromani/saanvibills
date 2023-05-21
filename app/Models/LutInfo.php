<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LutInfo extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function vendore()
    {
       return $this->belongsTo(VendorDetail::class,'vendore_id','vendore_id');
    }
    public function vendore_details()
    {
       return $this->belongsTo(VendoreCompanyDetails::class,'vendore_company_id');
    }

}
