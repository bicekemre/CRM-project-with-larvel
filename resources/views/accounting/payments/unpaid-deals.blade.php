@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-centered align-middle table-nowrap table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">Client ID</th>
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Total Payment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($revenues)
                                        @foreach($revenues as $revenue)
                                            <tr>
                                                <td>{{ $revenue->client->id ?? '' }}</td>
                                                <td>
                                                    <div>
                                                        {{ $revenue->client->name ?? ''}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-15">{{ $revenue->service->name ?? ''}}</h5>
                                                </td>
                                                <td>{{ $revenue->invoice->total_amount ?? ''}}</td>
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