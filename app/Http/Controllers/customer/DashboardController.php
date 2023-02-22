<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\State;
use App\Models\TimeZone;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $currencies=Currency::get();
        $timezones=TimeZone::get();
        $cities=City::get();
        $countries=Country::get();
        $states=State::get();
        return view('customers.dashboard',compact('currencies','timezones','countries'));
    }  
}
