<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendoreCompanyDetails extends Model
{
    use HasFactory,SoftDeletes;
    Protected $guarded=[];

    public function getFullAddressAttribute()
    {
      $ad=$this->company_address;
      $city=$this->city_info->name;
      $state=$this->state_info->name;
      $country=$this->country_info->name;
      return $ad.', '.$city.',  <br/>'.$state.','.$country;
    }
    public function country_info()
    {
        return $this->belongsTo(Country::class, 'country');
    }

    public function state_info()
    {
        return $this->belongsTo(State::class, 'state');
    }
    public function city_info()
    {
        return $this->belongsTo(City::class, 'city');
    }

}
