@extends('layout.main')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-3">
                    <!-- Profile-->
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="user-profile-img">
                                <img src="{{asset('assets/images/pattern-bg.jpg')}}" class="profile-img profile-foreground-img rounded-top" style="height: 120px;" alt="">
                                <div class="overlay-content rounded-top">
                                    <div>
                                        <div class="user-nav p-3">
                                            <div class="d-flex justify-content-end">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal font-size-20 text-white"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end user-profile-img -->

                            <div class="mt-n5 position-relative">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/users/avatar.jpg') }}" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                    <div class="mt-3">
                                        <div class="mt-4">
                                            <a href="/" class="btn btn-primary waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target="#addInvoiceModal"><i class="bx bx-plus me-1 align-middle"></i> Add Payment</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="p-3 mt-3">
                                <div class="row text-center">
                                    <div class="col-6 border-end">
                                        <div class="p-1">
                                            <a href="/client-edit/{{ $client->id }}/{{ $client->type }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="bx bx-pencil me-1 align-middle"></i> Edit</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-1">
                                            <a href="/client/delete/{{ $client->id }}" class="btn btn-danger waves-effect waves-light btn-sm"><i class="bx bx-trash me-1 align-middle"></i> delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- Contact-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Contact</h5>

                            <div>
                                <ul class="list-unstyled mb-0 text-muted">
                                    <li>
                                        <div class="d-flex align-items-center py-2">
                                            <div class="flex-grow-1">
                                                <i class="mdi mdi-email font-size-16 text-dark me-1"></i> Email
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div><a href="mailto: {{ $client->email }}">{{ $client->email }}</a></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center py-2">
                                            <div class="flex-grow-1">
                                                <i class="mdi mdi-phone font-size-16 text-info me-1"></i> Phone
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div><a href="tel: {{ $client->phone }}">{{ $client->phone }}</a> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center py-2">
                                            <div class="flex-grow-1">
                                                <i class="mdi mdi-whatsapp font-size-16 text-primary me-1"></i> Whatsapp
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div><a href="https://api.whatsapp.com/send?phone={{ $client->phone }}">Contact</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-1">
                                    <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Field</th>
                                        <th scope="col">Value</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Client Name</th>
                                        <td>{{ $client->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Phone</th>
                                        <td><a href="#" class="text-dark">{{ $client->phone }}</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td>{{ $client->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Source</th>
                                        <td>{{ $client->source->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Service</th>
                                        <td><span class="badge badge-soft-primary font-size-12">{{ $client->service->name ?? ''}}</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Service</th>
                                        <td><span class="badge badge-soft-primary font-size-12">{{ $client->staff->name ?? ''}}</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Transaction History</h5>
                            <table class="table table-nowrap table-hover mb-1 mt-2">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Service / Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($revenues)
                                    @foreach($revenues as $revenue)
                                <tr>
                                    <th scope="row">${{ $revenue->amount }}</th>
                                    <td><a href="/services/{{ $revenue->service->id ??  ''}}" class="text-dark">
                                            {{ $revenue->service->name ?? ''}}
                                        </a>
                                    <p>{{ $revenue->payment_date }}</p>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="/payment/edit/{{ $revenue->id }}">Edit</a>
                                                <a class="dropdown-item" href="/payment/delete/{{ $revenue->id }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @endisset
                            </table>

                        </div><!-- end card body -->
                    </div>



                </div>
            </div><!-- end row -->

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
                                                <div class="col-6 offset-3 mb-3 align-content-center">
                                                    <label class="form-label">Client</label>
                                                    <select name="id_client" class="form-select">
                                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 offset-3 mb-3">
                                                    <label class="form-label">Service</label>
                                                    <select name="id_service" class="form-select">
                                                        <option value="{{ $client->service->id ?? null }}">{{ $client->service->name }}</option>
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
        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- profile init -->
        <script src="{{ asset('assets/js/pages/profile.init.js') }}"></script>
        <!-- flatpickr js -->
        <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <!-- invoice-list init -->
        <script src="{{ asset('assets/js/pages/invoice-list.init.js') }}"></script>
    @endsection