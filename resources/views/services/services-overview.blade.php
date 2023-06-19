@extends('layout.main')
@section('page-name', $service->name)
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/services">Services</a></li>
@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card pb-0">
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified project-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#clients" role="tab">
                                        <i class="mdi mdi-account-group font-size-20"></i>
                                        <span class="d-none d-sm-block">Clients</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                                        <i class="mdi mdi-clipboard-edit-outline font-size-20"></i>
                                        <span class="d-none d-sm-block">Tasks</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#team" role="tab">
                                        <i class="mdi mdi-account-multiple-outline font-size-20"></i>
                                        <span class="d-none d-sm-block">Team</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#payments" role="tab">
                                        <i class="mdi mdi-chart-box-plus-outline font-size-20"></i>
                                        <span class="d-none d-sm-block"></span>Activities</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="clients" role="tabpanel">
                                    <div class="card mb-0 border-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h5 class="card-title">Clients</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="btn btn-link text-dark dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="uil uil-ellipsis-h"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table align-middle table-nowrap mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 40px;"></th>
                                                        <th scope="col" style="width: 140px;">Client ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email/Phone</th>
                                                        <th scope="col">Source</th>
                                                        <th scope="col">Sales Staff</th>
                                                        <th scope="col" style="width: 140px;">Action</th>
                                                    </tr><!-- end tr -->
                                                    </thead><!-- end thead -->
                                                    <tbody>
                                                    @isset($clients)
                                                        @foreach($clients as $client)
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input class="form-check-input" type="checkbox" value="" id="taskcheck01">
                                                                        <label class="form-check-label" for="taskcheck01"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="/client/profile/{{ $client->id }}">{{ $client->id }}</a></td>
                                                                <td>
                                                                    <h5 class="font-size-14"><a href="#" class="text-dark">{{ $client->name }}</a></h5>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-size-14"><a href="#" class="text-dark">{{ $client->email }}</a></h5>
                                                                    <p class="text-muted mb-0">{{ $client->phone }}</p>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-size-14"><a href="#" class="text-dark">{{ $client->source->name ?? ''}}</a></h5>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-size-14"><a href="#" class="text-dark">{{ $client->staff->name ?? ''}}</a></h5>
                                                                </td>


                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="uil uil-ellipsis-h"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="/client-edit/{{ $client->id }}/{{ $client->type }}">Edit</a>
                                                                            <a class="dropdown-item" href="/client/delete/{{ $client->id }}">Delete</a>
                                                                            <a class="dropdown-item" href="/client/profile/{{ $client->id }}">Profile</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr><!-- end tr -->
                                                        @endforeach
                                                    @endisset
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                                <div class="row mb-2 mt-2">
                                                    <div class="col-sm-12">
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
                                            </div>

                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end tab pane -->

                                <div class="tab-pane" id="tasks" role="tabpanel">
                                    <div class="card mb-0 border-0">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h5 class="card-title">Tasks</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="btn btn-link text-dark dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="uil uil-ellipsis-h"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li> <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addTaskModal"><i class="uil uil-plus me-1"></i> Add
                                                                    New</a></li>
                                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table align-middle table-nowrap mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 40px;"></th>
                                                        <th scope="col" style="width: 140px;">User Name</th>
                                                        <th scope="col">Task</th>
                                                        <th scope="col">Text</th>
                                                        <th scope="col">Deadline</th>
                                                        <th scope="col" style="width: 140px;">Action</th>
                                                    </tr><!-- end tr -->
                                                    </thead><!-- end thead -->
                                                    <tbody>
                                                    @isset($tasks)
                                                        @foreach($tasks as $task)
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input class="form-check-input" type="checkbox" value="" id="taskcheck01">
                                                                        <label class="form-check-label" for="taskcheck01"></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-size-14">{{ $task->user->name ?? '' }}</h5>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-size-14">{{ $task->title }}</h5>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-size-14">{{ $task->text }}</h5>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-size-14">{{ $task->deadline }}</h5>
                                                                </td>
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="uil uil-ellipsis-h"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="/task/edit/{{ $task->id }}">Edit</a>
                                                                            <a class="dropdown-item" href="/task/delete/{{ $task->id }}">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr><!-- end tr -->
                                                        @endforeach

                                                    @endisset
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                                <div class="row mb-2 mt-2">
                                                    <div class="col-sm-12">
                                                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                                                            <li class="page-item {{ $tasks->currentPage() == 1 ? 'disabled' : '' }}">
                                                                <a class="page-link" href="{{ $tasks->previousPageUrl() }}"
                                                                   aria-label="Previous">
                                                                    <i class="mdi mdi-chevron-left"></i>
                                                                </a>
                                                            </li>
                                                            @foreach ($tasks->getUrlRange(1, $tasks->lastPage()) as $page => $url)
                                                                <li class="page-item {{ $tasks->currentPage() == $page ? 'active' : '' }}">
                                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                                </li>
                                                            @endforeach
                                                            <li
                                                                    class="page-item {{ $tasks->currentPage() == $tasks->lastPage() ? 'disabled' : '' }}">
                                                                <a class="page-link" href="{{ $tasks->nextPageUrl() }}"
                                                                   aria-label="Next">
                                                                    <i class="mdi mdi-chevron-right"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end tab pane -->

                                <div class="tab-pane" id="team" role="tabpanel">
                                    <div>
                                        <div class="card mb-0 border-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    @isset($users)
                                                        @foreach($users as $user)
                                                            <div class="col-xl-4 col-sm-6">
                                                                <div class="card">
                                                                    <div class="card-body p-4">
                                                                        <div class="d-flex align-items-start">

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="font-size-15 mb-1 text-truncate"><a href="/users/edit/{{ $user->id }}" class="text-dark">{{ $user->name }}</a></h5>
                                                                                <span class="badge badge-soft-success mb-0">@foreach( $user->roles as $role){{ $role->name }} @endforeach</span>
                                                                            </div>


                                                                            <div class="flex-shrink-0 dropdown">
                                                                                <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item" href="/users/edit/{{ $user->id }}">Edit</a>
                                                                                    <a class="dropdown-item" href="/users/delete/{{ $user->id }}">Delete</a>
                                                                                </div>
                                                                            </div><!-- end dropdown -->
                                                                        </div>

                                                                        <div class="pt-2">
                                                                            <a href="mail: {{ $user->email }}" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</a>
                                                                            <a href="/users/edit/{{ $user->id }}" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end card body -->
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->
                                                        @endforeach
                                                    @endisset
                                                </div>
                                                <div class="row mb-2 mt-2">
                                                    <div class="col-sm-12">
                                                        <ul class="pagination pagination-rounded justify-content-end mb-2">
                                                            <li class="page-item {{ $users->currentPage() == 1 ? 'disabled' : '' }}">
                                                                <a class="page-link" href="{{ $users->previousPageUrl() }}"
                                                                   aria-label="Previous">
                                                                    <i class="mdi mdi-chevron-left"></i>
                                                                </a>
                                                            </li>
                                                            @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                                                <li class="page-item {{ $users->currentPage() == $page ? 'active' : '' }}">
                                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                                </li>
                                                            @endforeach
                                                            <li
                                                                    class="page-item {{ $users->currentPage() == $users->lastPage() ? 'disabled' : '' }}">
                                                                <a class="page-link" href="{{ $users->nextPageUrl() }}"
                                                                   aria-label="Next">
                                                                    <i class="mdi mdi-chevron-right"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane" id="payments" role="tabpanel">
                                    <div class="card mb-0 border-0">
                                        <div class="card-header bg-transparent border-bottom d-flex">

                                            <h5 class="card-title mb-0">Activities</h5>

                                            <div class="ms-auto">
                                                <ul class="nav nav-tabs card-header-tabs float-end border-bottom-0">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#card-header-payments-tabs" data-bs-toggle="tab">
                                                            <span class="d-block d-sm-none"><i class="uil uil-comment-alt-lines"></i></span>
                                                            <span class="d-none d-sm-block">Payments</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#card-header-expenses-tabs" data-bs-toggle="tab">
                                                            <span class="d-block d-sm-none"><i class="uil uil-paperclip"></i></span>
                                                            <span class="d-none d-sm-block">Expenses</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="card-header-payments-tabs">
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table class="table align-middle table-nowrap">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Service</th>
                                                                    <th>Client Name</th>
                                                                    <th>Payment Type</th>
                                                                    <th>Payment Date</th>
                                                                    <th>Created Date</th>
                                                                    <th>Amount</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @isset($revenues)
                                                                    @foreach($revenues as $revenue)
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check font-size-16">
                                                                                    <input class="form-check-input" type="checkbox"
                                                                                           id="customerlistcheck01">
                                                                                    <label class="form-check-label" for="customerlistcheck01"></label>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $revenue->service->name ?? ''}}</td>
                                                                            <td>{{ $revenue->client->name ?? ''}}</td>

                                                                            <td>{{ $revenue->payment }}</td>
                                                                            <td>{{ $revenue->payment_date}}</td>
                                                                            <td>{{ $revenue->created_at }}</td>
                                                                            <td>${{ $revenue->amount }}</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                                                       aria-expanded="false">
                                                                                        <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                                        <li><a href="/payment/edit/{{ $revenue->id }}" class="dropdown-item"><i
                                                                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                                                Edit</a></li>
                                                                                        <li><a href="/payment/delete/{{ $revenue->id }}" class="dropdown-item"><i
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
                                                            <div class="row mb-2 mt-2">
                                                                <div class="col-sm-12">
                                                                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                                                                        <li class="page-item {{ $revenues->currentPage() == 1 ? 'disabled' : '' }}">
                                                                            <a class="page-link" href="{{ $revenues->previousPageUrl() }}"
                                                                               aria-label="Previous">
                                                                                <i class="mdi mdi-chevron-left"></i>
                                                                            </a>
                                                                        </li>
                                                                        @foreach ($revenues->getUrlRange(1, $revenues->lastPage()) as $page => $url)
                                                                            <li class="page-item {{ $revenues->currentPage() == $page ? 'active' : '' }}">
                                                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                        <li
                                                                                class="page-item {{ $revenues->currentPage() == $revenues->lastPage() ? 'disabled' : '' }}">
                                                                            <a class="page-link" href="{{ $revenues->nextPageUrl() }}"
                                                                               aria-label="Next">
                                                                                <i class="mdi mdi-chevron-right"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->

                                                <div class="tab-pane" id="card-header-expenses-tabs">
                                                    <div>
                                                        <div class="table-responsive">
                                                            <table class="table align-middle table-nowrap">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Service</th>
                                                                    <th>Payment Type</th>
                                                                    <th>Payment Status</th>
                                                                    <th>Payment Date</th>
                                                                    <th>Created Date</th>
                                                                    <th>Amount</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @isset($expenses)
                                                                    @foreach($expenses as $expense)
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check font-size-16">
                                                                                    <input class="form-check-input" type="checkbox"
                                                                                           id="customerlistcheck01">
                                                                                    <label class="form-check-label" for="customerlistcheck01"></label>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $expense->service->name ?? ''}}</td>

                                                                            <td>{{ $expense->payment }}</td>
                                                                            <td>{{ $expense->is_paid }}</td>
                                                                            <td>{{ $expense->payment_date}}</td>
                                                                            <td>{{ $expense->created_at }}</td>
                                                                            <td>${{ $expense->amount }}</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                                                                       aria-expanded="false">
                                                                                        <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                                        <li><a href="/expense/edit/{{ $expense->id }}" class="dropdown-item"><i
                                                                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                                                                Edit</a></li>
                                                                                        <li><a href="/expense/delete/{{ $expense->id }}" class="dropdown-item"><i
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
                                                            <div class="row mb-2 mt-2">
                                                                <div class="col-sm-12">
                                                                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                                                                        <li class="page-item {{ $expenses->currentPage() == 1 ? 'disabled' : '' }}">
                                                                            <a class="page-link" href="{{ $expenses->previousPageUrl() }}"
                                                                               aria-label="Previous">
                                                                                <i class="mdi mdi-chevron-left"></i>
                                                                            </a>
                                                                        </li>
                                                                        @foreach ($expenses->getUrlRange(1, $expenses->lastPage()) as $page => $url)
                                                                            <li class="page-item {{ $expenses->currentPage() == $page ? 'active' : '' }}">
                                                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                        <li
                                                                                class="page-item {{ $expenses->currentPage() == $expenses->lastPage() ? 'disabled' : '' }}">
                                                                            <a class="page-link" href="{{ $expenses->nextPageUrl() }}"
                                                                               aria-label="Next">
                                                                                <i class="mdi mdi-chevron-right"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                            </div>
                                            <!-- end tab content -->

                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <form action="{{ route('task.create') }}" method="POST">
                                    <input type="hidden" name="id_service" value="{{ $service->id }}">
                                    @csrf
                                    <!-- Modal -->
                                    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addContactModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addContactModalLabel">Add Task</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Employee</label>
                                                                <select name="id_user" class="form-select">
                                                                    <option value="">Select</option>
                                                                    @isset($users)
                                                                        @foreach($users as $user)
                                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                                        @endforeach
                                                                    @endisset
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="title" class="form-label">Title</label>
                                                                <input type="text" class="form-control" name="title"  id="title" placeholder="Enter Name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="text" class="form-label">Text</label>
                                                                <textarea type="text" class="form-control" id="text" name="text" placeholder="Enter Designation"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="date" class="form-label">Deadline</label>
                                                                <input type="date" class="form-control" name="deadline" id="date">
                                                            </div>

                                                    </div>
                                                </div><!-- end modalbody -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light w-sm" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary w-sm">Add</button>
                                                </div>

                                                <!-- end modalfooter -->
                                            </div>
                                            <!-- end modal content -->
                                        </div>
                                    </div>
                                    <!-- end modal -->
                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection
