@extends('master')
@section('title', 'Lut Info')
@section('style')
@endsection

@section('content')
<div class="container">
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('form.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('form.lut')}}</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    <div class="page-meta card p-3 ">
        <form class="row g-3" action="{{route('shop.lut.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4">
                <label for="vendor" class="form-label">{{__('form.vendor')}}</label>
                <select name="vendore_company" class="form-select" id="vendor">
                    <option selected disabled hidden>Choose...</option>
                    @foreach ($vendor as $v)
                    <option value="{{ $v->id }}" @isset($lut)@selected($lut->vendor_id== $v->id) @endisset>{{ $v->company_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
    <label for="year" class="form-label">{{__('form.year')}}</label>
    <select name="year" class="form-select" id="vendor">
        <option selected disabled hidden>Choose...</option>
        @for ($year = 2023; $year <= 2050; $year++)
            <option value="{{ $year }}" @isset($lut)@selected($lut->year == $year) @endisset>{{ $year }}</option>
        @endfor
    </select>
</div>
<div class="col-md-4">
                <label for="lut" class="form-label">{{__('form.luts')}}</label>
                <input type="text" name="lut" class="form-control" id="inputEmail4">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">{{__('form.sign in')}}</button>
            </div>
        </form>
    </div>
    <div class="container mt-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area card">
                            <table id="myTable" class="table dt-table-hover " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Company</th>
                                        <th>Vendor</th>
                                        <th>Year</th>
                                        <th>Lut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lutlist as $data)
                                    <tr>
                                        <td>{{$loop->index+1??''}}</td>
                                        <td>{{$data->vendore->company_name??''}}</td>
                                        <td>{{$data->vendore_details->company_name??''}}</td>
                                        <td>{{$data->year??''}}</td>
                                        <td>{{$data->lut??''}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
</div>


@endsection

@section('script')
@endsection