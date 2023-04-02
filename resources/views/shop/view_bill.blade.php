@extends('master')
@section('title', 'Vendor Show')
@section('style')
<link href="{{asset('src/assets/css/dark/apps/invoice-list.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('src/assets/css/light/apps/invoice-list.css')}}" rel="stylesheet" type="text/css" />
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
                    <table id="invoice-list" class="table dt-table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column"> Record no. </th>
                                            <th>Invoice Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bill_data as $bill)
                                        <tr>
                                            <td class="checkbox-column"> 1 </td>
                                            <td><a href="./app-invoice-preview.html"><span class="inv-number">{{$bill->invoice_no??''}}</span></a></td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="usr-img-frame me-2 rounded-circle">
                                                        <img alt="avatar" class="img-fluid rounded-circle" src="../src/assets/img/profile-12.jpeg">
                                                    </div>
                                                    <p class="align-self-center mb-0 user-name">{{$bill->customer_name??''}}</p>
                                                </div>
                                            </td>
                                            <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{$bill->customer->email??''}}</span></td>
                                            <td><span class="badge badge-light-success inv-status">{{$bill->payment_status??''}}</span></td>
                                            <td><span class="inv-amount">$234.40</span></td>
                                            <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>{{$bill->created_at->format('d-M-Y')}}</span></td>
                                            <td>
                                                <a class="badge badge-light-primary text-start me-2 action-edit" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                                <a class="badge badge-light-danger text-start action-delete" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
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
<script src="{{asset('src/assets/js/apps/invoice-list.js')}}"></script>
@endsection
