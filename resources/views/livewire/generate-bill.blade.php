<div>
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
            <form class="row g-3"  method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search by mobil/email/tin no..."
                    wire:model='search_customer_val'>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" wire:click='search_customer()'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>

                </div>
            </form>
            <div class="row"><div class="col-12 text-center d-flex justify-content-center">@if(Session::has('error')) <span class="text-danger">{{ Session::get('error') }}</span> @endif</div></div>
        </div>
        <div class="page-meta card p-3 ">
            <form class="row g-3" action="{{ route('admin.customer.store') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <label for="invoice" class="form-label">{{ __('form.invoiceno') }}</label>
                    <input type="text" placeholder="invoice no" wire:model='invoice' class="form-control"  id="invoice">

                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">{{ __('form.date') }}</label>
                    <input type="date" name="date" class="form-control" wire:model='date' id="date">
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label">{{ __('form.customername') }}</label>
                    <input type="text" wire:model='customer.full_name' name='name'  placeholder='Customer Name' class="form-control"  id="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">{{ __('form.mobile') }}</label>
                    <input type="text" placeholder="mobile no" name="mobile" wire:model='customer.mobile' class="form-control"  id="inputPassword4">
                    @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">{{ __('form.ID/ TPIN/ TIN NO*') }}</label>
                    <input type="text" name="tin_no" class="form-control" id="inputAddress2" wire:model='customer.tin_no' placeholder="ID/ TPIN/ TIN NO">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">{{ __('form.vehicleno') }}</label>
                    <input type="text" placeholder="vehicle no" name="vehicoleno" class="form-control"
                        id="inputCity">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ __('form.add_new') }}</button>
                </div>
            </form>
        </div>
        <div class="page-meta card p-3 ">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12 m-2 ">
                <h4 class="text-center">{{ __('form.products') }}</h4>
            </div>
            {{-- @if($errors)
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif --}}
            <form class="row g-3" wire:submit.prevent="submit" method="POST">
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
                                <th>Weight (in Kg)</th>
                                <th class="text-center">Rate</th>
                                <th class="text-center" colspan="2">Taxable Value</th>
                            </tr>
                        </thead>
                        <tbody class="addhtml">
                            <tr>
                                <td>1</td>
                                <td colspan="3">
                                    <input type="text" class="border-0" wire:model='pd.0'>
                                    @error('pd.0') {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='hsn.0'>
                                    @error('hsn.0') {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='qty.0' >
                                    @error('qty.0') {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='unit.0'>
                                    @error('unit.0') {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='weight.0' >
                                    @error('weight.0') {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='rate.0' >
                                    @error('rate.0') {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='taxableval.0' readonly>
                                    @error('taxableval.0') {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <span class="btn btn-success" id="add" style="cursor: pointer;"
                                        wire:click='add_bill_field({{ $i }})'>+</span>
                                </td>
                            </tr>
                            @foreach($inputs as $key => $value)
                            <tr>
                                <td>{{ $key+2 }}</td>
                                <td colspan="3">
                                    <input type="text" class="border-0" wire:model='pd.{{ $value }}'>
                                    @error('pd.'.$value) {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='hsn.{{ $value }}'>
                                    @error('hsn.'.$value) {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='qty.{{ $value }}'>
                                    @error('qty.'.$value) {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='unit.{{ $value }}'>
                                    @error('unit.'.$value) {{ $message }}@enderror

                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='weight.{{ $value }}'>
                                    @error('weight.'.$value) {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='rate.{{ $value }}'>
                                    @error('rate.'.$value) {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <input type="text" class="border-0" wire:model='taxableval.{{ $value }}' readonly>
                                    @error('taxableval.'.$value) {{ $message }}@enderror
                                </td>
                                <td class="text-center">
                                    <span class="btn btn-danger" id="add" style="cursor: pointer;"
                                        wire:click='remove_bill_field({{ $key }})'>-</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            <div class="card-foot m-3">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Total Weight of Product (kg) {{ $total_weight }}</h6>
                    </div>
                    <div class="col-md-6">

                        <h6>Total Amount of Product ({{ Auth::guard(\App\Helpers\Helper::getGuard())->user()->vendor_detail->currency??'' }}) {{number_format($this->total_amount)}}</h6>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success w-50">Save </button>
                </div>
            </div>
        </form>
        </div>
    </div>


</div>
