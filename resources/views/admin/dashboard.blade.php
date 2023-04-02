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
