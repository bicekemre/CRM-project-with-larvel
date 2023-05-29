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
                            <form action="{{ route('expense.update', $expense->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="hidden" value="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Amount</label>
                                            <input type="text" class="form-control" id="name" value="{{ $expense->amount }}" name="amount">
                                            @error('amount')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email-input" class="form-label">Description</label>
                                            <input class="form-control" type="text" id="email-input" value="{{ $expense->desc }}" name="desc">
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
                                            <label class="form-label">Service</label>
                                            <select name="id_service" class="form-select">
                                                @isset($expense->id_service)<option selected value="{{ $expense->service->id }}">{{ $expense->service->name }}</option>@endisset
                                            </select>
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Payment type :</label>
                                            <select name="payment" class="form-select">
                                                <option selected>Select Payment method</option>
                                                <option value="CR">Credit / Debit Card</option>
                                                <option value="PY">Paypal</option>
                                                <option value="CA">Cash</option>
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