@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="card">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title">Users List <span
                                            class="text-muted fw-normal ms-2">({{ count($users) }})</span></h5>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-6">
                            <div class="d-flex flex-wrap align-items-start justify-content-md-end mt-2 mt-md-0 gap-2 mb-3">
                                <div>
                                    <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addContactModal"><i class="uil uil-plus me-1"></i> Add
                                        New</a>
                                </div>
                                <div class="dropdown">
                                    <a class="btn btn-link text-dark dropdown-toggle shadow-none" href="#"
                                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                    <!-- end ul -->
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <!-- Modal -->
                    <div class="modal fade" id="addContactModal" tabindex="-1" aria-labelledby="addContactModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addContactModalLabel">Add Contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('users.store') }}" method="POST">
                                    <div class="modal-body p-4">
                                        <div>
                                            <div class="mb-3">
                                                <label for="addcontact-name-input" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="addcontact-name-input" placeholder="Enter Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="addcontact-email-input" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="addcontact-email-input" placeholder="Enter Email">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Service</label>
                                                <select name="id_service" class="form-select">
                                                    <option value="">Select</option>
                                                    @isset($services)
                                                        @foreach($services as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Role</label>
                                                <select name="id_role" class="form-select">
                                                    <option value="">Select</option>
                                                    @isset($roles)
                                                        @foreach($roles as $role)
                                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>


                                        </div>
                                    </div><!-- end modalbody -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light w-sm" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary w-sm">Add</button>
                                    </div>
                                </form>
                                <!-- end modalfooter -->
                            </div>
                            <!-- end modal content -->
                        </div>
                    </div>
                    <!-- end modal -->

                    <div class="row">
                        @isset($users)
                            @foreach($users as $user)
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                                         class="img-fluid rounded-circle">
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-15 mb-1 text-truncate"><a
                                                                href="/users/view/{{ $user->id }}" class="text-dark">{{ $user->name }}</a></h5>
                                                    <span class="badge badge-soft-success mb-0">{{ $user->roles[1]->name }}</span>

                                                </div>


                                                <div class="flex-shrink-0 dropdown">
                                                    <a class="text-body dropdown-toggle font-size-16" href="#"
                                                       role="button" data-bs-toggle="dropdown"
                                                       aria-haspopup="true">
                                                        <i class="icon-xs" data-feather="more-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Remove</a>
                                                    </div>
                                                </div><!-- end dropdown -->
                                            </div>
                                            <p class="mt-4 text-muted">{{ $user->email }}.</p>
                                            <p class="mt-4 text-muted">{{ $user->phone }}</p>
                                            <div class="pt-2">
                                                <a href="/users/edit/{{ $user->id }}" type="button" class="btn btn-soft-primary btn-sm w-md text-truncate"><i class="bx bxs-pencil me-1 align-middle"></i> Edit</a>
                                                <a href="/users/view/{{ $user->id }}" type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</a>
                                                <a href="/users/delete/{{ $user->id }}" type="button" class="btn btn-danger btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Delete</a>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            @endforeach
                        @endisset
                    </div><!-- end row -->
                    <div class="row g-0 text-center text-sm-start">
                        <div class="col-sm-6">
                            <div>
                                <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-6">
                            <ul
                                    class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
            </div>
@endsection
@section('script')


@endsection
