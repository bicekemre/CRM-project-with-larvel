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
                                        <th scope="col">Service Admin</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Client Amount</th>
                                        <th scope="col">Total Income</th>
                                        <th scope="col">Employees</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($services)
                                        @foreach($services as $service)
                                            <tr>
                                                <td>
                                                    <div class="avatar">
                                                        @foreach($service->admins as $admin)
                                                            {{$admin->name}}
                                                        @endforeach
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-15">@isset($service->name)<a href="/services/{{$service->id}}"> {{ $service->name }}</a>@endisset</h5>
                                                </td>
                                                <td><a href="/clients-services/{{$service->id}}">{{ count($service->clients) }}</a></td>
                                                <td><a href="/clients-revenues/{{$service->id}}">{{ $service->totalIncome }}</a></td>
                                                <td><a href="/clients-staffs/{{$service->id}}">{{ count($service->staffs) }}</a></td>
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
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection