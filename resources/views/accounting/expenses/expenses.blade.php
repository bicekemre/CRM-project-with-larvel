@extends('layout.main')
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
                                        <button type="button" class="btn btn-light mb-4" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Expense</button>

                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Payment Type</th>
                                        <th>Payment Status</th>
                                        <th>Payment Date</th>
                                        <th>Created Date</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($expenses)
                                        @foreach($expenses as $expense)
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="customerlistcheck01">
                                                        <label class="form-check-label" for="customerlistcheck01"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $expense->service->name ?? ''}}</td>

                                                <td>{{ $expense->payment }}</td>
                                                <td>{{ $expense->is_paid }}</td>
                                                <td>{{ $expense->payment_date}}</td>
                                                <td>{{ $expense->created_at }}</td>
                                                <td>${{ $expense->amount }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="/expense/edit/{{ $expense->id }}" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                    Edit</a></li>
                                                            <li><a href="/expense/delete/{{ $expense->id }}" class="dropdown-item"><i
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
                            <ul class="pagination pagination-rounded justify-content-end mb-2">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                        <i class="mdi mdi-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                        <i class="mdi mdi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInvoiceModalLabel">Add Expense</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form  action="{{ route('expense.create') }}" method="post">
                                @method('POST')
                                @csrf
                                <div>
                                    <ul class="wizard-nav mb-5">
                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                     title="Customer Info">
                                                    <i class="uil uil-user-circle"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                     title="Invoice Details">
                                                    <i class="uil uil-invoice"></i>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="wizard-list-item">
                                            <div class="list-item">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                     title="Order Summery">
                                                    <i class="uil uil-clipboard-notes"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Client and Service</h5>
                                            <p class="card-title-desc">Select all information below</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-6 offset-3 mb-3">
                                                    <label class="form-label">Service</label>
                                                    <select name="id_service" class="form-select">
                                                        <option value="">Select</option>
                                                        @isset($services)
                                                            @foreach($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- wizard-tab -->

                                    <div class="wizard-tab">

                                        <div class="text-center mb-4">
                                            <h5>Invoice Details</h5>
                                            <p class="card-title-desc">Fill Expense Details.</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="invoicenumberinput" class="form-label">Amount #</label>
                                                        <input type="text" class="form-control" name="amount" id="invoicenumberinput">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="invoicenumberinput" class="form-label">Installment #</label>
                                                        <input type="text" class="form-control" name="installment" id="invoicenumberinput">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="invoicedescriptioninput" class="form-label">Description (Optional)</label>
                                                        <input type="text" class="form-control" name="desc" id="invoicedescriptioninput">
                                                    </div>
                                                </div>
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
                                                        <label for="payment_date" class="form-label">Payment Date</label>
                                                        <input type="date" class="form-control" name="payment_date" id="payment_date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Order Summery</h5>
                                            <p class="card-title-desc">Fill Order Summery Details.</p>
                                        </div>
                                        <div>
                                            <div class="table-responsive">
                                                <table class="table table-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Item name</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col" width="120px">Price</th>
                                                        <th scope="col" width="120px">Quantity</th>
                                                        <th scope="col" width="120px">Total</th>
                                                        <th scope="col" class="text-center">Action</th>
                                                    </tr>

                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <textarea class="form-control" rows="2"></textarea>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text"  value="0.00" readonly>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <a href="#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <textarea class="form-control" rows="2"></textarea>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input class="form-control" type="text"  value="0.00" readonly>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                <a href="#" class="text-danger p-2 d-inline-block" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-xl-3 col-md-4">
                                                    <div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Sub Total : <span class="float-end fw-normal text-body">0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Discount  : <span class="float-end fw-normal text-body"> - 0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Shipping Charge  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Tax  : <span class="float-end fw-normal text-body"> 0.00</span></h5>
                                                        </div>
                                                        <div>
                                                            <h5 class="font-size-14 py-2">Total  : <span class="float-end"> 0.00</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-primary w-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn" onclick="nextPrev(1)">Next</button>
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