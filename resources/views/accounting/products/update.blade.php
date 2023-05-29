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
                            <h4 class="card-title">Update Product</h4>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <form action="{{ route('products.update', $product->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="hidden" value="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name #</label>
                                            <input type="text" class="form-control" value="{{$product->name}}" name="name" id="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="brand" class="form-label">Brand #</label>
                                            <input type="text" class="form-control" value="{{$product->brand}}" name="brand" id="brand">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="stock" class="form-label">Stock</label>
                                            <input type="text" class="form-control" value="{{$product->stock}}" name="stock" id="stock">
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="text" class="form-control" value="{{$product->price}}" name="price" id="price">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-success"><i class="uil uil-check me-2"></i> Save</button>
                                        </div>
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
