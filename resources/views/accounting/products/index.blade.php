@extends('layout.main')
@section('page-name', 'Products')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/accounting">Accounting</a></li>
@endsection
@section('active-page', 'Products')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <div class="search-box me-2 mb-2 d-inline-block">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <i class="bx bx-search search-icon"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-sm-end">
                                        <button type="button" class="btn btn-light mb-4" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add products</button>

                                    </div>
                                </div><!-- end col-->
                            </div>
                            <form action="/products/delete" method="POST">
                                @csrf
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Product Number</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($products)
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="customerlistcheck01">
                                                        <label class="form-check-label" for="customerlistcheck01"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->brand }}</td>
                                                <td>{{ $product->code}}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="/products/edit/{{ $product->id }}" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                    Edit</a></li>
                                                            <li><a href="/products/delete/{{ $product->id }}" class="dropdown-item"><i
                                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                    Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-danger mb-4" id="deleteSelectedExpenses">
                                        <i class="mdi mdi-delete me-1"></i> Delete Selected
                                    </button>
                                </div>
                                <div class="col-sm-8">
                                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                                        <li class="page-item {{ $products->currentPage() == 1 ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </a>
                                        </li>

                                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                            <li class="page-item {{ $products->currentPage() == $page ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        <li class="page-item {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                                            <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                                                <i class="mdi mdi-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInvoiceModalLabel">Add Refund</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form  action="{{ route('products.create') }}" method="post">
                                @method('POST')
                                @csrf
                                <div>
                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Product</h5>
                                            <p class="card-title-desc">Fill information</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name #</label>
                                                        <input type="text" class="form-control" name="name" id="name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="brand" class="form-label">Brand #</label>
                                                        <input type="text" class="form-control" name="brand" id="brand">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="stock" class="form-label">Stock</label>
                                                        <input type="text" class="form-control" name="stock" id="stock">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="price" class="form-label">Price</label>
                                                        <input type="text" class="form-control" name="price" id="price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="submit" class="btn btn-primary w-sm ms-auto">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container-fluid -->
    </div>
@endsection
@section('script')
    <!-- flatpickr js -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- invoice-list init -->
    <script src="{{ asset('assets/js/pages/invoice-list.init.js') }}"></script>
@endsection