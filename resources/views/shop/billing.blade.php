@extends('master')
@section('title', 'Register Customer')
@section('style')
@endsection

@section('content')
    <div class="container">
        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('form.home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('sidebar.billing') }}</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        <div class="page-meta card p-3 ">
            <form class="row g-3" action="{{ route('admin.customer.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search by mobil/email/tin no..."
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="page-meta card p-3 ">
            <form class="row g-3" action="{{ route('admin.customer.store') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">{{ __('form.invoiceno') }}</label>
                    <input type="number" placeholder="invoice no" name="invoiceno" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword" class="form-label">{{ __('form.date') }}</label>
                    <input type="date" name="date" class="form-control" id="inputPassword">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">{{ __('form.customername') }}</label>
                    <input type="text" placeholder="customer name" name="customer_name" class="form-control"
                        id="inputEmail">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">{{ __('form.mobile') }}</label>
                    <input type="number" placeholder="mobile no" name="mobile" class="form-control" id="inputPassword4">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">{{ __('form.ID/ TPIN/ TIN NO*') }}</label>
                    <input type="text" name="tin_no" class="form-control" id="inputAddress2"
                        placeholder="ID/ TPIN/ TIN NO">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">{{ __('form.vehicleno') }}</label>
                    <input type="text" placeholder="vehicle no" name="vehicoleno" class="form-control" id="inputCity">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ __('form.sign in') }}</button>
                </div>
            </form>
        </div>
        <div class="page-meta card p-3 ">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12 m-2 ">
                <h4 class="text-center">{{ __('form.products') }}</h4>
            </div>
            <form class="row g-3" action="{{ route('admin.customer.store') }}" method="POST">
                @csrf
                <div class="table-responsive m-2">
                    <table class="table-sm table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th>S.NO.</th>
                                <th colspan="3">Description of Product</th>
                                <th>HSN Code</th>
                                <th>Quantity</th>
                                <th>Unit</th>
                                <th>Weight</th>
                                <th class="text-center">Rate</th>
                                <th class="text-center" colspan="2">Taxable Value</th>
                            </tr>
                        </thead>
                        <tbody class="addhtml">
                            <tr>
                                <td>
                                    1
                                </td>
                                <td colspan="3">
                                    <input type="text" class="border-0">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0">
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0">
                                </td>
                                <td class="text-center">
                                    <span class="btn btn-success" id="add" style="cursor: pointer;">+</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="card-foot m-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Total Weight of Product(kg)</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>Total Weight of Product(kg)</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Total Weight of Product(kg)</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>Total Weight of Product(kg)</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '#add', function() {
                var rowCount = parseInt($(".addhtml tr").length);
                var row = rowCount + 1;
                html = '<tr><td>' + row + '</td><td colspan="3">\
    <input type="text" class="border-0"></td><td class="text-center">\
    <input type="text" class="border-0"></td><td class="text-center">\
    <input type="text" class="border-0"></td><td class="text-center">\
    <input type="text" class="border-0"></td><td class="text-center">\
    <input type="text" class="border-0"></td><td class="text-center">\
    <input type="text" class="border-0"></td> <td class="text-center">\
    <input type="text" class="border-0"></td><td class="text-center">\
    <span class="btn btn-danger remove" style="cursor: pointer;">-</span></td></tr>';
                $('.addhtml').append(html);
            });

            $(document).on('click', '.remove', function() {
                $(this).closest("tr").remove();
            });
        });
    </script>
@endsection
