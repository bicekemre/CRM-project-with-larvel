@extends('layout.main')
@section('page-name', 'Summary')
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
                <div class="col-xxl-6 col-xl-6">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Income</h4>
                            <div>
                                <a href="/payments" type="button" class="btn btn-outline-success">See all</a>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Client</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($revenues)
                                        @foreach($revenues as $revenue)
                                            <tr>
                                                <th scope="row"></th>
                                                <td>{{ $revenue->client->name ?? ''}}</td>
                                                <td>{{ $revenue->amount }}</td>
                                                <td>{{ $revenue->payment_date}}</td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table><!-- end table -->
                                <div class="row mb-2 mt-2">
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
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col --> <div class="col-xxl-6 col-xl-6">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Expense</h4>
                            <div>
                                <a href="/expenses" type="button" class="btn btn-outline-danger ">See all</a>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($expenses)
                                        @foreach($expenses as $expense)
                                            <tr>
                                                <th scope="row"></th>
                                                <td>{{ $expense->desc }}</td>
                                                <td>{{ $expense->amount }}</td>
                                                <td>{{ $expense->payment_date}}</td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table><!-- end table -->
                                <div class="row mb-2 mt-2">
                                    <div class="col-sm-8">
                                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                                            <li class="page-item {{ $expenses->currentPage() == 1 ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $expenses->previousPageUrl() }}" aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            @foreach ($expenses->getUrlRange(1, $expenses->lastPage()) as $page => $url)
                                                <li class="page-item {{ $expenses->currentPage() == $page ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach
                                            <li class="page-item {{ $expenses->currentPage() == $expenses->lastPage() ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $expenses->nextPageUrl() }}" aria-label="Next">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection