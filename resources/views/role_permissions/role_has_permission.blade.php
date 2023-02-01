@extends('master')
@section('title', 'Role Page')
@section('style')
@endsection

@section('content')

<div class="container">
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('form.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('sidebar.assign permission')}}</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->
    <div class="page-meta card p-3 ">
            <div class="input-group">
                <select id="inputState" name="role" class="form-select roleid">
                    <option selected disabled hidden>Choose Role...</option>
                    @foreach ($roles as $role)
                    <option value="{{$role->id??''}}">{{$role->name??''}}</option>
                    @endforeach
                </select>
                <button class="btn btn-outline-primary fech" type="submit">{{__('form.fech permission')}}</button>
            </div>
    </div>
    <div class="permission">

    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function () {
        $(document).on('click','.fech', function () {
            var roleid = $('.roleid').val();
            var newurl="{{url('admin/fetch_permissions')}}";
            $.ajax({
                type: "get",
                url: newurl,
                data: {
                    'data':roleid,
                },
                success: function (response) {
                    $('.permission').html(response);
                }
            });
        });
    });
</script>
@endsection


