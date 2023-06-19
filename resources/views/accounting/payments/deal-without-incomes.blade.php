@extends('layout.main')
@section('page-name', 'Deal Without Payments')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/accounting">Accounting</a></li>
@endsection
@section('active-page', 'Deal Without Payments')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                <div class="col-3">
                                    <div class="mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Income </p>
                                        <h3 class="text-wrap mb-0">${{ $profits['totalRevenue'] ?? 0}}</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-3">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Expense</p>
                                        <h3 class="text-wrap mb-0">${{ $profits['totalExpense'] ?? 0 }}</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-3">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Profit</p>
                                        <h3 class="text-wrap mb-0">{{ number_format($profits['profitPercentage'], 2) ?? 0 }}%</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-3">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Grand Total</p>
                                        <h3 class="text-wrap mb-0">{{ $profits['profit'] ?? 0 }}</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Refunds</p>
                                        <h3 class="text-wrap mb-0">{{ $profits['totalRefunds'] ?? 0 }}</h3>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->


                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                <div class="col">
                                    <div class="mt-md-0 py-3 px-4 mx-2">
                                        <a type="button" data-bs-toggle="tab" class="btn btn-outline-primary nav-link active" data-service="all">All</a>
                                    </div>
                                </div>
                                @isset($services)
                                    @foreach($services as $service)
                                        <div class="col">
                                            <div class="mt-md-0 py-3 px-4 mx-2">
                                                <a type="button" data-bs-toggle="tab" class="btn btn-outline-primary nav-link">{{ $service->name }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/payment/delete" method="POST">
                                @csrf
                                <div class="table-responsive">
                                    <table class="table table-centered align-middle table-nowrap table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="selectAllExpenses">
                                                    <label class="form-check-label" for="selectAllExpenses"></label>
                                                </div>
                                            </th>
                                            <th scope="col">Service</th>
                                            <th scope="col">Client Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($revenues)
                                            @foreach($revenues as $revenue)
                                                <tr>
                                                    <td>
                                                        <div class="form-check font-size-16">
                                                            <input class="form-check-input expense-checkbox" type="checkbox" value="{{ $revenue->id }}" name="id[]" id="expenseCheckbox{{ $revenue->id }}">
                                                            <label class="form-check-label" for="expenseCheckbox{{ $revenue->id }}"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $revenue->service->name ?? ''}}</td>
                                                    <td>
                                                        <h5 class="font-size-15"> {{ $revenue->client->name ?? ''}}</h5>
                                                    </td>
                                                    <td>{{ $revenue->client->email ?? ''}}</td>
                                                    <td>{{ $revenue->payment_date }}</td>
                                                    <td>{{ $revenue->desc }}</td>
                                                    <td>
                                                        ${{ $revenue->amount }}
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endisset

                                        </tbody>

                                    </table>
                                </div>
                                <div class="row mb-2 mt-2">
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
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/deal-without-payments.js') }}"></script>
@endsection
