@extends('master')
@section('title', 'Vendor Show')
@section('style')
@endsection

@section('content')
<div class="container">
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('sidebar.vendor list')}}</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area card">
                        <table id="myTable" class="table dt-table-hover " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr.no</th>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vandors as $data)
                                <tr>
                                    <td>{{$loop->index+1??''}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                <img alt="avatar" class="img-fluid rounded-circle" src="{{asset('assets/src/assets/img/boy.png')}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$data->full_name??''}}</td>
                                    <td>{{$data->email??''}}</td>
                                    <td>{{$data->phone??''}}</td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark btn-sm">Open</button>
                                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
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
