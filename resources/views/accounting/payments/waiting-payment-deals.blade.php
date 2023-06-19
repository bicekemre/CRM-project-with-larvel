@extends('layout.main')
@section('page-name', 'Waiting Payments Deals')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/accounting">Accounting</a></li>
@endsection
@section('active-page', 'Waiting Payments Deals')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

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
                                            <th scope="col">Client Name</th>
                                            <th scope="col">Service Name</th>
                                            <th scope="col">Total Payment</th>
                                            <th scope="col">Paid</th>
                                            <th scope="col">Dept</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($revenues)
                                            @foreach($revenues as $revenue)
                                                <tr>
                                                    <td>
                                                        <div>
                                                          {{ $revenue->client->name ?? ''}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-15">{{ $revenue->service->name ?? ''}}</h5>
                                                    </td>
                                                    <td>{{ $revenue->invoice->total_amount ?? ''}}</td>
                                                    <td>{{ $revenue->amount }}</td>
                                                    <td>{{ (($revenue->invoice->total_amount) ?? 0) -($revenue->amount) ?? 0}}</td>
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