<?php

namespace App\Models;

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
}
