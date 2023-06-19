@extends('layout.main')
@section('page-name', 'Clients')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Day</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div id="simple_pie_chart_day" data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-info"]' data-label='["instagram", "facebook"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                </div><!-- end col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Week</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div id="simple_pie_chart_week" data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-info"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                </div><!-- end col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header justify-content-between d-flex align-items-center">
                            <h4 class="card-title">Month</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div id="simple_pie_chart_month" data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-info"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                </div><!-- end col -->
            </div><!-- end row -->



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
                                        <a href="/client-add/client" type="button"
                                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                            <i class="mdi mdi-plus me-1"></i> New Client
                                        </a>
                                    </div>
                                </div><!-- end col-->
                            </div>

                            <div class="table-responsive">
                                <form action="{{ route('clients.delete') }}" method="POST">
                                @method('POST')
                                @csrf
                                <table class="table align-middle table-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone / Email</th>
                                        <th>Address</th>
                                        <th>Type</th>
                                        <th>Source / Description</th>
                                        <th>Staff Sales</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($clients)
                                        @foreach($clients as $client)
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="customerlistcheck01">
                                                    <label class="form-check-label" for="customerlistcheck01"></label>
                                                </div>
                                            </td>
                                            <td>{{ $client->name }}</td>
                                            <td>
                                                <p class="mb-1">{{ $client->phone }}</p>
                                                <p class="mb-0">{{ $client->email }}</p>
                                            </td>

                                            <td>{{ $client->address }}</td>
                                            <td>{{ $client->type }}</td>
                                            <td>
                                                <p class="mb-1">{{ $client->source->name ?? '' }}</p>
                                                <p class="mb-0">{{ $client->source_desc }}</p>
                                            </td>
                                            <td>{{ $client->staff->name ?? ''}}</td>
                                            <td>{{ $client->created_at }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a href="/client-edit/{{ $client->id }}/{{ $client->type }}" class="dropdown-item"><i
                                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                Edit</a></li>
                                                        <li><a href="/client/delete/{{ $client->id }}" class="dropdown-item"><i
                                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                                Delete</a></li>
                                                        <li><a href="/client/profile/{{ $client->id }}" class="dropdown-item"><i
                                                                        class="mdi mdi-face-profile font-size-16 text-primary me-1"></i>
                                                                Profile</a></li>
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
                                                <li class="page-item {{ $clients->currentPage() == 1 ? 'disabled' : '' }}">
                                                    <a class="page-link" href="{{ $clients->previousPageUrl() }}"
                                                       aria-label="Previous">
                                                        <i class="mdi mdi-chevron-left"></i>
                                                    </a>
                                                </li>
                                                @foreach ($clients->getUrlRange(1, $clients->lastPage()) as $page => $url)
                                                    <li class="page-item {{ $clients->currentPage() == $page ? 'active' : '' }}">
                                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach
                                                <li
                                                        class="page-item {{ $clients->currentPage() == $clients->lastPage() ? 'disabled' : '' }}">
                                                    <a class="page-link" href="{{ $clients->nextPageUrl() }}"
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


        </div> <!-- container-fluid -->
    </div>
@endsection
    @section('script')
        <!-- piecharts init -->
        <script src="{{ asset('assets/js/pages/apexcharts-pie.init.js') }}"></script>
        <script src="{{ 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' }}"></script>

        <script src="{{ asset('assets/js/pages/clients.js') }}"></script>

    @endsection