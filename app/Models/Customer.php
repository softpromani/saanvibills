<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];
  protected $appends=['full_name'];
    public function getFullNameAttribute()
    {
      return $this->fname . " " . $this->lname;
    }

    public function shops()
    {
      return $this->belongsToMany(Shop::class,'customer_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
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
