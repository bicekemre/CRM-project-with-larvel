@extends('layout.main')
@section('page-name', 'Leads')
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
                                        <a href="/client-add/lead" type="button"
                                           class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2">
                                            <i class="mdi mdi-plus me-1"></i> New Lead
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
                                    @isset($leads)
                                        @foreach($leads as $lead)
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="customerlistcheck01">
                                                        <label class="form-check-label" for="customerlistcheck01"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $lead->name }}</td>
                                                <td>
                                                    <p class="mb-1">{{ $lead->phone }}</p>
                                                    <p class="mb-0">{{ $lead->email }}</p>
                                                </td>

                                                <td>{{ $lead->address }}</td>
                                                <td>{{ $lead->type }}</td>
                                                <td>
                                                    <p class="mb-1">{{ $lead->source->name }}</p>
                                                    <p class="mb-0">{{ $lead->source_desc }}</p>
                                                </td>
                                                <td>{{ $lead->staff->name }}</td>
                                                <td>{{ $lead->created_at }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a href="/client-edit/{{ $lead->id }}/lead" class="dropdown-item"><i
                                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                    Edit</a></li>
                                                            <li><a href="/leads-change/{{ $lead->id }}" class="dropdown-item"><i
                                                                            class="mdi mdi-account-reactivate font-size-16 text-success me-1"></i>
                                                                    +Client</a></li>
                                                            <li><a href="/client/delete/{{ $lead->id }}" class="dropdown-item"><i
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
                                            <li class="page-item {{ $leads->currentPage() == 1 ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $leads->previousPageUrl() }}"
                                                   aria-label="Previous">
                                                    <i class="mdi mdi-chevron-left"></i>
                                                </a>
                                            </li>
                                            @foreach ($leads->getUrlRange(1, $leads->lastPage()) as $page => $url)
                                                <li class="page-item {{ $leads->currentPage() == $page ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach
                                            <li
                                                    class="page-item {{ $leads->currentPage() == $leads->lastPage() ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $leads->nextPageUrl() }}"
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
