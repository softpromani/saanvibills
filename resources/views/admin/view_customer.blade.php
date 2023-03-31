@extends('master')
@section('title', 'Customer View page')
@section('style')
@endsection

@section('content')
<div class="container">
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customer List</li>
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
                                    <th>ID/ TPIN/ TIN NO*</th>
                                    <th>Pincode</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shop_has_customer as $data)
                                <tr>
                                    <td>{{$loop->index+1??''}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                <img alt="avatar" class="img-fluid rounded-circle" src="{{asset($data->customer->image)}}" onerror="this.onerror=null;this.src='{{asset('assets/src/assets/img/boy.png')}}';">
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$data->customer->full_name??''}}</td>
                                    <td>{{$data->customer->email??''}}</td>
                                    <td>{{$data->customer->mobile??''}}</td>
                                    <td>{{$data->customer->tin_no??''}}</td>
                                    <td>{{$data->customer->pincode??''}}</td>
                                    <td>{{$data->customer->country->name??''}}</td>
                                    <td>{{$data->customer->state_info->name??''}}</td>
                                    <td>{{$data->customer->city_info->name??''}}</td>
                                    <td>{{$data->customer->address??''}}</td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark btn-sm">Open</button>
                                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                @php $bid=Crypt::encrypt($data->customer->id); @endphp
                                              <a class="dropdown-item" href="{{route('admin.customer.edit',$bid)}}"><i class="material-icons light-warning-text text-darken-4">edit</i></a>
                                              <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('delete-form-{{ $bid }}').submit();">Delete </a>
                                              <form id="delete-form-{{ $bid }}" action="{{ route('admin.customer.destroy', $bid) }}" method="post" style="display: none;">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
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