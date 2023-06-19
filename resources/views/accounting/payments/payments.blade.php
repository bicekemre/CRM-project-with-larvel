@extends('layout.main')
@section('page-name', 'Payments')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/accounting">Accounting</a></li>
@endsection
@section('active-page', 'Payments')
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
                                        <button type="button" class="btn btn-light mb-4" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="mdi mdi-plus me-1"></i> Add Payment</button>

                                    </div>
                                </div><!-- end col-->
                            </div>
                            <form action="/payment/delete" method="POST">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Service</th>
                                            <th>Client Name</th>
                                            <th>Payment Type</th>
                                            <th>Payment Date</th>
                                            <th>Created Date</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($revenues)
                                            @foreach($revenues as $revenue)
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input" type="checkbox"
                                                                   id="customerlistcheck01">
                                                            <label class="form-check-label" for="customerlistcheck01"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $revenue->service->name ?? ''}}</td>
                                                    <td>{{ $revenue->client->name ?? ''}}</td>

                                                    <td>{{ $revenue->payment }}</td>
                                                    <td>{{ $revenue->payment_date}}</td>
                                                    <td>{{ $revenue->created_at }}</td>
                                                    <td>${{ $revenue->amount }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                               aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="/payment/edit/{{ $revenue->id }}" class="dropdown-item"><i
                                                                                class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="/payment/delete/{{ $revenue->id }}" class="dropdown-item"><i
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
                                            <li class="page-item {{ $revenues->currentPage() == 1 ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $revenues->previousPageUrl() }}" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>

                                            @foreach ($revenues->getUrlRange(1, $revenues->lastPage()) as $page => $url)
                                                <li class="page-item {{ $revenues->currentPage() == $page ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach

                                            <li class="page-item {{ $revenues->currentPage() == $revenues->lastPage() ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $revenues->nextPageUrl() }}" aria-label="Next">
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
                            <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form  action="{{ route('payment.create') }}" method="post">
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
                                            <h5>Client and Service</h5>
                                            <p class="card-title-desc">Select all information below</p>
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
                                            <p class="card-title-desc">Fill Invoice Details.</p>
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
        </div> <!-- container-fluid -->
    </div>
@endsection
@section('script')
    <!-- flatpickr js -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- invoice-list init -->
    <script src="{{ asset('assets/js/pages/invoice-list.init.js') }}"></script>
@endsection