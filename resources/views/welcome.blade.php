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
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="recipient-name" class="col-form-label">{{ __('form.company_name') }}</label>
                                <input type="text" class="form-control" name="cname" id="recipient-name">
                            </div>
                            <div class="col-md-6 mx-auto">

                                <div class="multiple-file-upload">
                                    <label for="recipient-name" class="col-form-label">{{ __('form.company_logo') }}</label>
                                    <input type="file" class="filepond file-upload-multiple" name="filepond"
                                        data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">{{ __('form.company_stamp') }}</label>
                            <div class="profile-image">

                                <!-- // The classic file input element we'll enhance
                                            // to a file pond, we moved the configuration
                                            // properties to JavaScript -->

                                <div class="img-uploader-content">
                                    <input type="file" class="filepond filepond2" name="filepond"
                                        accept="image/png, image/jpeg, image/gif" />
                                </div>

                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="recipient-name" class="col-form-label">{{ __('form.profile_image') }}</label>
                            <div class="profile-image">

                                <!-- // The classic file input element we'll enhance
                                            // to a file pond, we moved the configuration
                                            // properties to JavaScript -->

                                <div class="img-uploader-content">
                                    <input type="file" class="filepond filepond3" name="filepond"
                                        accept="image/png, image/jpeg, image/gif" />
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">{{ __('save') }}</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Modal title 2</h5>
                </div>
                <div class="modal-body">
                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus
                        egestas
                        sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper
                        mi. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- third modal --}}
    <div class="modal fade" id="exampleModal3" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title 3</h5>
                </div>
                <div class="modal-body">
                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus
                        egestas
                        sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper
                        mi. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- forth modal --}}
    <div class="modal fade" id="exampleModal4" tabindex="-1" data-keyboard="false" data-backdrop="static"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title 4</h5>
                </div>
                <div class="modal-body">
                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus
                        egestas
                        sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper
                        mi. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
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
            var step = {{ Auth::guard('vendor')->user()->step }};
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
