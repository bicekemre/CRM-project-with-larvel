@extends('layout.main')
@section('page-name', 'Invoices')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/accounting">Accounting</a></li>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start">
                                <div class="col-sm">
                                    <div>
                                        <button type="button" class="btn btn-light mb-4" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Invoice</button>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex gap-1">
                                        <div class="dropdown">
                                            <a class="btn btn-link text-body shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="uil uil-ellipsis-h"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive mt-4 mt-sm-0">
                                <table class="table align-middle table-nowrap table-check">
                                    <thead>
                                    <tr class="bg-transparent">
                                        <th style="width: 30px;">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th>Invoice ID</th>
                                        <th>Date</th>
                                        <th>Billing Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($invoices)
                                        @foreach($invoices as $invoice)
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </td>

                                                <td>{{ $invoice->number }}</td>
                                                <td>
                                                   {{ $invoice->date }}
                                                </td>
                                                <td>{{ $invoice->billing_name }}</td>

                                                <td>
                                                    ${{ $invoice->total_amount }}
                                                </td>
                                                <td>
                                                    @if($invoice->status == 1)
                                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                                    @else
                                                        <div class="badge badge-soft-warning font-size-12">Pending</div>
                                                    @endif
                                                </td>


                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="uil uil-ellipsis-h"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="/invoice/edit/{{ $invoice->id }}">Edit</a></li>
                                                            <li><a class="dropdown-item" href="/invoice/delete/{{ $invoice->id }}">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr><!-- end tr -->
                                        @endforeach
                                    @endisset
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-danger mb-4" id="deleteSelectedExpenses">
                                            <i class="mdi mdi-delete me-1"></i> Delete Selected
                                        </button>
                                    </div>
                                    <div class="col-sm-8">
                                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                                            <li class="page-item {{ $invoices->currentPage() == 1 ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $invoices->previousPageUrl() }}"
                                                   aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            @foreach ($invoices->getUrlRange(1, $invoices->lastPage()) as $page => $url)
                                                <li class="page-item {{ $invoices->currentPage() == $page ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach
                                            <li
                                                    class="page-item {{ $invoices->currentPage() == $invoices->lastPage() ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $invoices->nextPageUrl() }}"
                                                   aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </form>

                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <!-- Modal -->
            <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form action="{{ route('invoice.create') }}" method="POST">
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

                                    </ul>
                                    <!-- wizard-nav -->

                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Customer Information</h5>
                                            <p class="card-title-desc">Fill all information below</p>
                                        </div>
                                        <div>

                                            <div class="row">
                                                <div class="col-6 offset-3 mb-3 align-content-center">
                                                    <label class="form-label">Client</label>
                                                    <select name="id_client" class="form-select">
                                                        <option value="">Select</option>
                                                        @isset($clients)
                                                            @foreach($clients as $client)
                                                                <option value="{{ $client->id }}">{{ $client->name }}</option>
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
                                            <p class="card-title-desc">Fill Invoice Details.</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="mb-3">
                                                        <label for="billing_name" class="form-label">Billing Name </label>
                                                        <input type="text" class="form-control" name="billing_name" id="billing_name">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="total_amount" class="form-label">Amount #</label>
                                                        <input type="text" class="form-control" name="total_amount" id="total_amount">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="instalment" class="form-label">Instalment</label>
                                                        <input type="text" class="form-control" name="instalment" id="instalment">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Payment method :</label>
                                                        <select name="type" class="form-select">
                                                            <option selected>Select Payment method</option>
                                                            <option value="CR">Credit / Debit Card</option>
                                                            <option value="PY">Paypal</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="date" class="form-label">Date</label>
                                                        <input type="date" class="form-control" name="date" id="date">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label class="form-label">Payment Status :</label>
                                                        <select name="status" class="form-select">
                                                            <option selected>Select Payment Status</option>
                                                            <option value="1">Paid</option>
                                                            <option value="0">Pending</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- wizard-tab -->

                                    <!-- wizard-tab -->

                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-primary w-sm" id="prevBtn">Previous</button>
                                        <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn">Next</button>
                                        <button type="submit" class="btn btn-primary w-sm ms-auto d-none" id="addBtn">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

        </div> <!-- container-fluid -->
    </div>
@endsection
@section('script')
    <!-- flatpickr js -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- invoice-list init -->
    <script src="{{ asset('assets/js/pages/invoice-list.init.js') }}"></script>
@endsection