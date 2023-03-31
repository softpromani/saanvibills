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
}
