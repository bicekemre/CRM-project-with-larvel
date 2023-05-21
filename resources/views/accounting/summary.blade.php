@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                <div class="col">
                                    <div class="mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Income </p>
                                        <h3 class="text-wrap mb-0">@isset($totalRevenue)${{ $totalRevenue }}@endisset</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Expense</p>
                                        <h3 class="text-wrap mb-0">@isset($totalExpense)${{ $totalExpense }}@endisset</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Profit</p>
                                        <h3 class="text-wrap mb-0">@isset($profitPercentage){{ $profitPercentage }}@endisset</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Grand Total</p>
                                        <h3 class="text-wrap mb-0">@isset($profit){{ $profit }}@endisset</h3>
                                    </div>
                                </div><!-- end col -->

                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-wrap-50 mb-2 text-truncate">Refunds</p>
                                        <h3 class="text-wrap mb-0">75.35%</h3>
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
                                                <td>{{ $revenue->client->name }}</td>
                                                <td>{{ $revenue->amount }}</td>
                                                <td>{{ $revenue->payment_date}}</td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table><!-- end table -->
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
                            </div><!-- end table responsive -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
        </div>
    </div>
@endsection