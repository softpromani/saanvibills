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

@endsection

@section('content')
    {{-- -------------------- vendore modal start ---------------------- --}}
    {{-- first modal --}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('form.basic_info') }}</h5>
                </div>
                <form method="post" action="{{route('vendore_details')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="recipient-name" class="col-form-label">{{ __('form.company_name') }}</label>
                                <input type="text" class="form-control" name="cname" id="recipient-name">
                            </div>
                            <div class="col-md-6 mx-auto">

                                <div class="multiple-file-upload">
                                    <label for="clogo" class="col-form-label">{{ __('form.company_logo') }}</label>
                                    <input type="file" class="form-control"
                                     name="clogo" id='clogo'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="stamplogo" class="col-form-label">{{ __('form.company_stamp') }}</label>
                                <div class="profile-image">
                                    <div class="img-uploader-content">
                                        <input type="file" class="form-control" name="stamplogo" id='stamplogo'
                                            accept="image/png, image/jpeg, image/gif" />
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="proimage" class="col-form-label">{{ __('form.profile_image') }}</label>
                                <div class="profile-image">
                                    <div class="img-uploader-content">
                                        <input type="file" class="form-control" name="profile" id='proimage'
                                            accept="image/png, image/jpeg, image/gif" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- second modal --}}
    <div class="modal fade" id="exampleModal2" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('form.vendore_basic_info') }}</h5>
                </div>
                <form method="post" action="{{route('vendore_info')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="zone">{{ __('form.time_zone') }}</label>
                                <select class="form-select" name="timezone" id="zone">
                                    <option selected disabled hidden>--select time zone--</option>
                                    @foreach ($timezones as $timezone)
                                    <option value="{{$timezone->utc}}">{{$timezone->country_name}} {{$timezone->utc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="currency">{{ __('form.currency') }}</label>
                                <select class="form-select" name="currency" id="currency">
                                    <option selected disabled hidden>--select time currency--</option>
                                    @foreach ($currencies as $currencie)
                                    <option value="{{$currencie->code}}">{{$currencie->code}} ({{$currencie->symbol}})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="recipient-name" class="col-form-label">{{ __('form.name') }}</label>
                                <input type="text" name="name" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="col-form-label">{{ __('form.email') }}</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="mobile" class="col-form-label">{{ __('form.mobile') }}</label>
                                <input type="mobile" name="mobile" class="form-control" id="mobile">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="signature" class="col-form-label">{{ __('form.signature') }}</label>
                                <input type="file" name="signature" class="form-control" id="signature">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="message-text"
                                    class="col-form-label">{{ __('form.vendore_address') }}:</label>
                                <textarea class="form-control" name="vaddress" id="message-text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('form.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- third modal --}}
    <div class="modal fade" id="exampleModal3" tabindex="-1" data-keyboard="false" data-backdrop="static"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('form.company_details') }}</h5>
                </div>
                <form method="post" action="{{route('vendore_company')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="recipient-name" class="col-form-label">{{ __('form.company_name') }}</label>
                                <input type="text" name="cname" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="cseries" class="col-form-label">{{ __('form.invoice_series') }}</label>
                                <input type="text" name="cseries" class="form-control" id="cseries">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="city">{{ __('form.country') }}</label>
                                <select class="form-select" name="countrie" id="country">
                                    <option selected disabled hidden>--select Country--</option>
                                    @foreach ($countries as $countrie)
                                    <option value="{{$countrie->id ?? ''}}">{{$countrie->name ?? ''}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state">{{ __('form.state') }}</label>
                                <select class="form-select" name="state" id="state">
                                    <option selected disabled hidden>--select time currency--</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="country">{{ __('form.city') }}</label>
                                <select class="form-select" name="city" id="city">
                                    <option selected disabled hidden>--select city--</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="pincode" class="col-form-label">{{ __('form.pincode') }}</label>
                                <input type="text" name="pincode" class="form-control" id="pincode">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="gstin/tan/pan" class="col-form-label">{{ __('form.gstin/tan/pan') }}</label>
                                <input type="text" name="gstin_tan_pan" class="form-control" id="gstin/tan/pan">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="iec" class="col-form-label">{{ __('form.iec') }}</label>
                                <input type="text" name="iec" class="form-control" id="iec">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="message-text"
                                    class="col-form-label">{{ __('form.vendore_address') }}:</label>
                                <textarea class="form-control" name="companyaddress" id="message-text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('form.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- forth modal --}}
    <div class="modal fade" id="exampleModal4" tabindex="-1" data-keyboard="false" data-backdrop="static"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('form.bank_details') }}</h5>
                </div>
                @php
                    $data = Session::get('vendoredetails');
                @endphp
                <form method="post" action="{{route('vendore_bank')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <input type="hidden" name="company_id" value="{{$data->id??''}}">
                            <div class="mb-3 col-md-6">
                                <label for="bankname" class="col-form-label">{{ __('form.bankname') }}</label>
                                <input type="text" name="bankname" class="form-control" id="bankname">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="bankbranch" class="col-form-label">{{ __('form.bankbranch') }}</label>
                                <input type="text" name="bankbranch" class="form-control" id="bankbranch">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label for="ifsc" class="col-form-label">{{ __('form.ifsc') }}</label>
                                <input type="text" name="ifsc" class="form-control" id="ifsc">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="accountno" class="col-form-label">{{ __('form.accountno') }}</label>
                                <input type="text" name="accountno" class="form-control" id="accountno">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="adcode" class="col-form-label">{{ __('form.adcode') }}</label>
                                <input type="text" name="adcode" class="form-control" id="adcode">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- -------------------- vendore modal end ---------------------- --}}
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
    <!-- END PAGE LEVEL PLUGINS -->
    <script>
        $(document).ready(function() {
            var step = {{ Auth::guard('customer')->user()->step??'' }};
            if (step == 0) {
                $('#exampleModal1').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                $('#exampleModal1').modal('show');
            } else if (step == 1) {
                $('#exampleModal2').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                $('#exampleModal2').modal('show');
            } else if (step == 2) {
                $('#exampleModal3').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                $('#exampleModal3').modal('show');
            } else if (step == 3) {
                $('#exampleModal4').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                $('#exampleModal4').modal('show');
            }

            $(document).on('change','#country',function(){
                var id = $(this).val();
                var state = "{{url('shop/vendore-state')}}"+'/'+id;
                $.ajax({
                    type: "GET",
                    url: state,
                    success: function (response) {
                       $('#state').html(response);
                    }
                });
            });
            $(document).on('change','#state',function(){
                var id = $(this).val();
                var city = "{{url('shop/vendore-city')}}"+'/'+id;
                $.ajax({
                    type: "GET",
                    url: city,
                    success: function (response) {
                       $('#city').html(response);
                    }
                });
            });
        });

    </script>
@endsection
