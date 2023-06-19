@extends('layout.main')
@section('page-name', 'Purchases-Update')
@section('page-name', 'Update')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/accounting">Accounting</a></li>
    <li class="breadcrumb-item"><a href="/purchases">Purchases</a></li>
@endsection
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
                            <h4 class="card-title">Update Supplier</h4>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="hidden" value="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name #</label>
                                            <input type="text" class="form-control" value="{{$supplier->name}}" name="name" id="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="brand" class="form-label">Email #</label>
                                            <input type="email" class="form-control" value="{{$supplier->email}}" name="brand" id="brand">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Stock</label>
                                            <input type="text" class="form-control" value="{{$supplier->phone}}" name="phone" id="phone">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success"><i class="uil uil-check me-2"></i> Save</button>
                                    </div>
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