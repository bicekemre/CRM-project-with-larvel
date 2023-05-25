@extends('layout.main')
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
                                        <h3 class="text-wrap mb-0">{{ $profits['profitPercentage'] ?? 0 }}%</h3>
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
                                @isset($services)
                                    @foreach($services as $service)
                                        <div class="col">
                                            <div class="mt-md-0 py-3 px-4 mx-2">
                                                <a data-filter=".data-{{ $service->slug }}" type="button" data-bs-toggle="tab" class="btn btn-outline-primary nav-link">{{ $service->name }}</a>
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
                            <div class="table-responsive">
                                <table class="table table-centered align-middle table-nowrap table-hover mb-0">
                                    <thead>
                                    <tr>
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
                                            <tr class="data-{{ $revenue->service->slug }} ">
                                                <td>{{ $revenue->service->name }}</td>
                                                <td>
                                                    <h5 class="font-size-15"> {{ $revenue->client->name }}</h5>
                                                </td>
                                                <td>{{ $revenue->client->email }}</td>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('js/script.js') }}"></script>
@endsection
