@extends('master')
@section('title', 'Register Vendor')
@section('style')
@endsection

@section('content')
<div class="container">
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('form.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('sidebar.vendor')}}</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    <div class="page-meta card p-3 ">
        <form class="row g-3" action="{{route('store')}}" method="POST">
            @csrf
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
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">{{__('form.password')}}</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">{{__('form.confirm password')}}</label>
                <input type="password" name="cpassword" class="form-control" id="inputPassword4">
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
