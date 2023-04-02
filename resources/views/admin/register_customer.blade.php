@extends('master')
@section('title', 'Register Customer')
@section('style')
@endsection

@section('content')
<div class="container">
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('form.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('customer')}}</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    <div class="page-meta card p-3 ">
        <form class="row g-3" action="{{route('admin.customer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">{{__('form.profile')}}</label>
                <input type="file" name="pic" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">{{__('form.first name')}}</label>
                <input type="text" name="fname" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">{{__('form.last name')}}</label>
                <input type="text" name="lname" class="form-control" id="inputPassword">
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">{{__('form.email')}}</label>
                <input type="email" name="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">{{__('form.mobile')}}</label>
                <input type="number" name="mobile" class="form-control" id="inputPassword4">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">{{__('form.ID/ TPIN/ TIN NO*')}}</label>
                <input type="text" name="tin_no" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputpincode" class="form-label">{{__('form.pincode')}}</label>
                <input type="number" name="pincode" class="form-control" id="inputpincode">
            </div>
            <div class="col-md-4">
                <label for="country" class="form-label">{{__('form.country')}}</label>
                <select name="country" class="form-select" id="country">
                    <option selected disabled hidden>Choose...</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}" @isset($customer)@selected($customer->country_id== $country->id) @endisset>{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="state" class="form-label">{{__('form.state')}}</label>
                <select id="state" name="state" class="form-select">
                    @isset($customer)
                    @foreach (Helper::getStateByCountry($customer->country_id) as $st)
                    <option value="{{$st->id}}" @selected($st->id==$customer->state)>{{$st->name}}</option>
                    @endforeach
                    @else
                    <option value="" selected disabled>--Select State--</option>
                    @endisset
                </select>
            </div>
            
            <div class="col-md-6">
                <label for="currency" class="form-label">{{__('form.currency')}}</label>
                <select id="currency" name="currency" class="form-select">
                    <option value="" selected disabled>--Select Currency--</option>
                    @foreach ($currencies as $currency)
                    <option value="{{ $currency->id }}">{{ $currency->code?? '' }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="timezone" class="form-label">{{__('form.time_zone')}}</label>
                <select id="timezone" name="timezone" class="form-select">
                    <option value="" selected disabled>--Select Timezone--</option>
                    @foreach ($timezones as $timezone)
                    <option value="{{ $timezone->id }}">{{ $timezone->timezone?? '' }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">{{__('form.address')}}</label>
                <textarea name="address" class="form-control mb-4" rows="3" id="textarea-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">{{__('form.sign in')}}</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
@endsection