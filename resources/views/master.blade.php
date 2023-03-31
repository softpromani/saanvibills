<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
@include('includes.head')
@livewireStyles
@yield('style')
</head>
<body class="layout-boxed">

    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('includes.header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @if(Auth::guard(App\Models\PermissionName::$customer)->check())
        @include('includes.customer-sidebar')
        @elseif(Auth::guard(App\Models\PermissionName::$shop)->check())
        @include('includes.shop-sidebar')
        @elseif(Auth::guard(App\Models\PermissionName::$admin)->check())
        @include('includes.admin-sidebar')
        @endif
        <!--  END SIDEBAR  -->


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
            <!--  BEGIN FOOTER  -->
            @include('includes.footer')
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->
    @include('includes.foot')
    @yield('script')
    @include('sweetalert::alert')
    @livewireScripts
</body>

</html>
