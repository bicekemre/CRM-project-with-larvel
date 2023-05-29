@extends('layout.main')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4 class="card-title">Create Client</h4>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <form action="{{ route('payment.update', $invoice->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="hidden" value="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Amount</label>
                                            <input type="text" class="form-control" id="name" value="{{ $invoice->amount }}" name="amount">
                                            @error('amount')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-input" class="form-label">Description</label>
                                            <input class="form-control" type="text" id="email-input" value="{{ $invoice->desc }}" name="desc">
                                            @error('desc')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success"><i class="uil uil-check me-2"></i> Save</button>
                                        </div>


                                    </div>
                                    <!-- end col -->

                                    <div class="col-lg-6">

                                        <div class="mb-3">
                                            <label class="form-label">Payment type :</label>
                                            <select name="payment" class="form-select">
                                                <option selected>Select Payment method</option>
                                                <option value="CR">Credit / Debit Card</option>
                                                <option value="PY">Paypal</option>
                                                <option value="CA">Cash</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Payment Status :</label>
                                            <select name="status" class="form-select">
                                                @if($invoice->status == 1)
                                                <option selected value="1">Paid</option>
                                                <option value="0">Pending</option>
                                                @else
                                                <option selected value="0">Pending</option>
                                                <option  value="1">Paid</option>
                                                @endif
                                            </select>
                                        </div>


                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                            <!-- end form -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
@endsection
@section('script')
    <!-- form mask -->
    <script src="{{ asset('assets/libs/imask/imask.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-mask.init.js') }}"></script>
@endsection