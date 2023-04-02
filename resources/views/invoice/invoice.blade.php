@extends('master')
@section('title', 'Home page')
@section('style')

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link href="{{ asset('assets/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css') }}" />
    <link href="{{ asset('assets/src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('assets/src/assets/css/light/apps/invoice-preview.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/src/assets/css/dark/apps/invoice-preview.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
    <div class="row container mt-5">
        <div class="col-xl-12">

            <div class="invoice-actions-btn">

                <div class="invoice-action-btn">

                    <div class="row d-flex">
                        <div class="col-xl-3 col-md-3 col-sm-6">
                            <a href="javascript:void(0);" class="btn btn-primary btn-send">Send
                                Invoice</a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-6">
                            <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-6">
                            <a href="javascript:void(0);" class="btn btn-success btn-download">Download</a>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-6">
                            <a href="./app-invoice-edit.html" class="btn btn-dark btn-edit">Edit</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <div class="row invoice layout-top-spacing layout-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="doc-container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="invoice-container">
                                    <div class="invoice-inbox">
                                        <div id="ct" class="">
                                            <div class="invoice-00001">
                                                <div class="content-section">
                                                    <div class="ps-2 pt-3 pe-2 border-bottom">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-12">
                                                                <div class="d-flex">
                                                                    <img class="company-logo"
                                                                        src="{{ asset('storage/' . $bills->vendore->vendor_detail->satamp_logo ?? '') }}"
                                                                        alt="company" width="100px">
                                                                </div>
                                                                <p class="inv-street-addr mt-3">{!! $bills->company->first()->full_address !!}</p>
                                                                <p class="inv-email-address">
                                                                    {{ $bills->company->first()->pin ?? '' }}</p>
                                                            </div>
                                                            <div class="col-sm-6 text-sm-end">
                                                                <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4"><span
                                                                        class="inv-title">Invoice : </span> <span
                                                                        class="inv-number">{{ $bills->invoice_no ?? '' }}</span>
                                                                </p>
                                                                <p class="inv-created-date mt-sm-5 mt-3">
                                                                    <span class="inv-title">Invoice Date : </span>
                                                                    <span
                                                                        class="inv-date">{{ $bills->invoice_date ?? '' }}</span>
                                                                    <br>
                                                                    <span class="inv-title">IEC :</span>
                                                                    <span
                                                                        class="inv-date">{{ $bills->company->first()->iec ?? '' }}</span>
                                                                    <br>
                                                                    <span class="inv-title">GSTIN : </span>
                                                                    <span
                                                                        class="inv-date">{{ $bills->company->first()->gstin_tan_pan ?? '' }}</span>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-center">Supply of export
                                                        without payment of IGST under LUT</p>
                                                    <div class="inv--detail-section">
                                                        <div class="row ps-2 pe-2">
                                                            <div
                                                                class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                                <p class="inv-to">Invoice To</p>
                                                            </div>
                                                            <div
                                                                class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 text-sm-end mt-sm-0 mt-5">
                                                                <h6 class=" inv-title">Invoice From</h6>
                                                            </div>

                                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                                <p class="inv-customer-name">
                                                                    {{ $bills->customer_name ?? '' }}</p>
                                                                <p class="inv-street-addr">
                                                                    {{ $bills->customer->address ?? '' }}</p>
                                                                <p class="inv-email-address">
                                                                    {{ $bills->customer->email ?? '' }}</p>
                                                                <p class="inv-email-address">
                                                                    {{ $bills->customer->pincode ?? '' }}</p>
                                                                <p class="inv-email-address">
                                                                    {{ $bills->customer_mobile ?? '' }}</p>
                                                            </div>

                                                            <div
                                                                class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1 text-sm-end">
                                                                <p class="inv-customer-name">
                                                                    {{ $bills->company->first()->company_name ?? '' }}</p>
                                                                <p class="inv-street-addr">{!! $bills->company->first()->full_address !!}
                                                                </p>
                                                                <p class="inv-email-address">
                                                                    {{ $bills->vendore->email ?? '' }}</p>
                                                                <p class="inv-email-address">
                                                                    {{ $bills->company->first()->pin ?? '' }}</p>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="">
                                                        <div id="res" class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">PRODUCT</th>
                                                                        <th class="text-end" scope="col">HSN</th>
                                                                        <th class="text-end" scope="col">Price</th>
                                                                        <th class="text-end" scope="col">QTY</th>
                                                                        <th class="text-end" scope="col">UNIT</th>
                                                                        <th class="text-end" scope="col">WEIGHT</th>
                                                                        <th class="text-end" scope="col">RATE</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="">
                                                                    @foreach ($bills->billdatas as $data)
                                                                        <tr>
                                                                            <td>{{ $loop->index + 1 ?? '' }}</td>
                                                                            <td>{{ $data->product ?? '' }}</td>
                                                                            <td class="text-end">{{ $data->hsn ?? '' }}
                                                                            </td>
                                                                            <td class="text-end">
                                                                                {{ number_format($data->qty * $data->rate, 2) ?? '' }}
                                                                            </td>
                                                                            <td class="text-end">{{ $data->qty ?? '' }}
                                                                            </td>
                                                                            <td class="text-end">{{ $data->unit ?? '' }}
                                                                            </td>
                                                                            <td class="text-end">{{ $data->weight ?? '' }}
                                                                            </td>
                                                                            <td class="text-end">{{ $data->rate ?? '' }}
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="border-top border-bottom">
                                                        <div class="col-12 ps-3 pe-3">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <p class="">Weight: &nbsp;
                                                                        {{ $bills->total_weight ?? '' }} (kg)</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <p style="float: right;">Sub
                                                                        Total : &nbsp;
                                                                        {{ $bills->currency->symbol ?? '' }}
                                                                        {{ $bills->total_price ?? '' }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row border-top">
                                                                <div class="col-6 d-flex">
                                                                    <p class="p-0">Amount in words</p>
                                                                </div>
                                                                <div class="col-6 d-flex">
                                                                    <p class="p-0">forty three thousands two hundred Rupees
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2 pe-2">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-6">
                                                                <b class="text-dark">OUR BANK DETAILS</b>
                                                                <p>Bank of Name - {{ $bills->bank->bank_name ?? '' }}</p>
                                                                <p>Branch - {{ $bills->bank->bank_branch ?? '' }}</p>
                                                                <p>IFSC - {{ $bills->bank->bank_ifsc ?? '' }}</p>
                                                                <p>Account No - {{ $bills->bank->account_no ?? '' }}</p>
                                                                <p>A D Code - {{ $bills->bank->ad_code ?? '' }}</p>
                                                            </div>
                                                            <div class="col-sm-6 col-6 border-left">
                                                                <b class="text-dark">For {{$bills->company->first()->company_name??''}} -</b>
                                                                <br>
                                                                <img class="company-logo" width="200px"
                                                                    src="{{ asset('storage/' . $bills->vendore->vendor_detail->signature ?? '') }}"
                                                                    alt="company">
                                                                <br>
                                                                <br>
                                                                <p>Authorised Signatory</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="inv--note border-top">
                                                            <div class="row mt-3">
                                                                <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                    <img src="{{ asset('assets/compu.jpg') }}"
                                                                        width="100px" alt="">
                                                                </div>
                                                                <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                    <img src="{{ asset('assets/duroflex.jpg') }}"
                                                                        width="100px" alt="">
                                                                </div>
                                                                <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                    <img src="{{ asset('assets/epson.jpg') }}"
                                                                        width="100px" alt="">
                                                                </div>
                                                                <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                    <img src="{{ asset('assets/gobbler.jpg') }}"
                                                                        width="100px" alt="">
                                                                </div>
                                                                <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                    <img src="{{ asset('assets/kangro.jpg') }}"
                                                                        width="100px" alt="">
                                                                </div>
                                                                <div class="col-sm-2 col-2 order-sm-0 order-1">
                                                                    <img src="{{ asset('assets/splashjet.png') }}"
                                                                        width="100px" alt="">
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('assets/src/plugins/src/filepond/custom-filepond.js') }}"></script>
    <script src="{{ asset('assets/src/assets/js/apps/invoice-preview.js') }}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
@endsection
