@extends('layout.main')
@section('page-name', 'Expenses')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/accounting">Accounting</a></li>
@endsection
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
                                        <button type="button" class="btn btn-light mb-4" data-bs-toggle="modal"
                                                data-bs-target="#addInvoiceModal">
                                            <i class="mdi mdi-plus me-1"></i> Add Expense
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <form action="{{ route('expenses.delete') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="selectAllExpenses">
                                                    <label class="form-check-label" for="selectAllExpenses"></label>
                                                </div>
                                            </th>
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
                                                            <input class="form-check-input expense-checkbox" type="checkbox"
                                                                   value="{{ $expense->id }}" name="id[]"
                                                                   id="expenseCheckbox{{ $expense->id }}">
                                                            <label class="form-check-label"
                                                                   for="expenseCheckbox{{ $expense->id }}"></label>
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
                                                                <li><a href="/expense/edit/{{ $expense->id }}"
                                                                       class="dropdown-item"><i
                                                                                class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                        Edit</a></li>
                                                                <li><a href="/expense/delete/{{ $expense->id }}"
                                                                       class="dropdown-item"><i
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
                                    <div class="row mb-2">
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-danger mb-4" id="deleteSelectedExpenses">
                                                <i class="mdi mdi-delete me-1"></i> Delete Selected
                                            </button>
                                        </div>
                                        <div class="col-sm-8">
                                            <ul class="pagination pagination-rounded justify-content-end mb-2">
                                                <li class="page-item {{ $expenses->currentPage() == 1 ? 'disabled' : '' }}">
                                                    <a class="page-link" href="{{ $expenses->previousPageUrl() }}"
                                                       aria-label="Previous">
                                                        <i class="mdi mdi-chevron-left"></i>
                                                    </a>
                                                </li>
                                                @foreach ($expenses->getUrlRange(1, $expenses->lastPage()) as $page => $url)
                                                    <li class="page-item {{ $expenses->currentPage() == $page ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach
                                                <li
                                                        class="page-item {{ $expenses->currentPage() == $expenses->lastPage() ? 'disabled' : '' }}">
                                                    <a class="page-link" href="{{ $expenses->nextPageUrl() }}"
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
                    </div>
                </div>
            </div>

            <!-- end row -->
            <form action="{{ route('expense.create') }}" method="POST" class="needs-validation">
                @method('POST')
                @csrf

                <!-- Modal -->
                <div class="modal fade" id="addInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addInvoiceModalLabel">Add Expense</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <div>
                                    <!-- Wizard Navigation -->
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
                                    <!-- /Wizard Navigation -->

                                    <!-- Wizard Tabs -->
                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Client and Service</h5>
                                            <p class="card-title-desc">Select all information below</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-6 offset-3 mb-3">
                                                    <label class="form-label">Service</label>
                                                    <select name="id_service" required
                                                            class="form-select  @error('id_service') is-invalid @enderror">
                                                        <option>Select</option>
                                                        @isset($services)
                                                            @foreach($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                            @endforeach
                                                        @endisset
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wizard-tab">
                                        <div class="text-center mb-4">
                                            <h5>Invoice Details</h5>
                                            <p class="card-title-desc">Fill Expense Details.</p>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="number-mask" class="form-label">Amount #</label>
                                                        <input type="text"
                                                               class="form-control @error('amount') is-invalid @enderror"
                                                               name="amount" id="number-mask" required>
                                                        <div class="invalid-feedback">
                                                            This area must be numeric.
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="invoicenumberinput" class="form-label">Installment
                                                            #</label>
                                                        <input type="text" class="form-control" name="installment"
                                                               id="invoicenumberinput">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="invoicedescriptioninput" class="form-label">Description
                                                            (Optional)</label>
                                                        <input type="text" class="form-control" name="desc"
                                                               id="invoicedescriptioninput">
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
                                                        <input type="date"
                                                               class="form-control @error('date') is-invalid @enderror"
                                                               name="payment_date" id="payment_date" required>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        This area must be numeric.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Wizard Tabs -->

                                    <!-- Button Group -->
                                    <div class="d-flex align-items-start gap-3 mt-4">
                                        <button type="button" class="btn btn-primary w-sm" id="prevBtn">Previous</button>
                                        <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn">Next</button>
                                        <button type="submit" class="btn btn-primary w-sm ms-auto d-none" id="addBtn">Add</button>
                                    </div>
                                    <!-- /Button Group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div> <!-- container-fluid -->
    </div>


@endsection
@section('script')
    <!-- flatpickr js -->
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- invoice-list init -->
    <script src="{{ asset('assets/js/pages/invoice-list.init.js') }}"></script>
@endsection