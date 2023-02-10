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
                                    <input type="file" class="filepond file-upload-multiple" name="clogo" id='clogo'
                                        data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="stamplogo" class="col-form-label">{{ __('form.company_stamp') }}</label>
                                <div class="profile-image">
                                    <div class="img-uploader-content">
                                        <input type="file" class="filepond filepond2" name="stamplogo" id='stamplogo'
                                            accept="image/png, image/jpeg, image/gif" />
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="proimage" class="col-form-label">{{ __('form.profile_image') }}</label>
                                <div class="profile-image">
                                    <div class="img-uploader-content">
                                        <input type="file" class="filepond filepond3" name="proimage" id='proimage'
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
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="zone">{{ __('form.time_zone') }}</label>
                                <select class="form-select" name="" id="zone">
                                    <option selected disabled hidden>--select time zone--</option>
                                    <option value="c">C</option>
                                    <option value="cpp">C++</option>
                                    <option value="java">JAVA</option>
                                    <option value="php">PHP</option>
                                    <option value="python">Python</option>
                                    <option value="dotNet">.Net</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScipt</option>
                                    <option value="react">React</option>
                                    <option value="angular">Angular</option>
                                    <option value="svelt">Svelt</option>
                                    <option value="vue">Vue</option>
                                    <option value="node">Node</option>
                                    <option value="wordpress">Wordpress</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="currency">{{ __('form.currency') }}</label>
                                <select class="form-select" name="currency" id="currency">
                                    <option selected disabled hidden>--select time currency--</option>
                                    <option value="c">C</option>
                                    <option value="cpp">C++</option>
                                    <option value="java">JAVA</option>
                                    <option value="php">PHP</option>
                                    <option value="python">Python</option>
                                    <option value="dotNet">.Net</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScipt</option>
                                    <option value="react">React</option>
                                    <option value="angular">Angular</option>
                                    <option value="svelt">Svelt</option>
                                    <option value="vue">Vue</option>
                                    <option value="node">Node</option>
                                    <option value="wordpress">Wordpress</option>
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
                                <input type="file" class="form-control" id="signature">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="message-text"
                                    class="col-form-label">{{ __('form.vendore_address') }}:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">{{ __('form.save') }}</button>
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
                <form>
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
                                <label for="city">{{ __('form.city') }}</label>
                                <select class="form-select" name="city" id="city">
                                    <option selected disabled hidden>--select City--</option>
                                    <option value="c">C</option>
                                    <option value="cpp">C++</option>
                                    <option value="java">JAVA</option>
                                    <option value="php">PHP</option>
                                    <option value="python">Python</option>
                                    <option value="dotNet">.Net</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScipt</option>
                                    <option value="react">React</option>
                                    <option value="angular">Angular</option>
                                    <option value="svelt">Svelt</option>
                                    <option value="vue">Vue</option>
                                    <option value="node">Node</option>
                                    <option value="wordpress">Wordpress</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state">{{ __('form.state') }}</label>
                                <select class="form-select" name="state" id="state">
                                    <option selected disabled hidden>--select time currency--</option>
                                    <option value="c">C</option>
                                    <option value="cpp">C++</option>
                                    <option value="java">JAVA</option>
                                    <option value="php">PHP</option>
                                    <option value="python">Python</option>
                                    <option value="dotNet">.Net</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScipt</option>
                                    <option value="react">React</option>
                                    <option value="angular">Angular</option>
                                    <option value="svelt">Svelt</option>
                                    <option value="vue">Vue</option>
                                    <option value="node">Node</option>
                                    <option value="wordpress">Wordpress</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="country">{{ __('form.country') }}</label>
                                <select class="form-select" name="country" id="country">
                                    <option selected disabled hidden>--select country--</option>
                                    <option value="c">C</option>
                                    <option value="cpp">C++</option>
                                    <option value="java">JAVA</option>
                                    <option value="php">PHP</option>
                                    <option value="python">Python</option>
                                    <option value="dotNet">.Net</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScipt</option>
                                    <option value="react">React</option>
                                    <option value="angular">Angular</option>
                                    <option value="svelt">Svelt</option>
                                    <option value="vue">Vue</option>
                                    <option value="node">Node</option>
                                    <option value="wordpress">Wordpress</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="pincode" class="col-form-label">{{ __('form.pincode') }}</label>
                                <input type="text" class="form-control" id="pincode">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="gstin/tan/pan" class="col-form-label">{{ __('form.gstin/tan/pan') }}</label>
                                <input type="text" name="gstin/tan/pan" class="form-control" id="gstin/tan/pan">
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
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">{{ __('form.save') }}</button>
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
                <form>
                    <div class="modal-body">
                        <div class="row">
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
                        <button type="button" class="btn btn-primary">Save</button>
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
            var step = {{ Auth::guard('vendor')->user()->step??'' }};
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
        });
    </script>
@endsection
