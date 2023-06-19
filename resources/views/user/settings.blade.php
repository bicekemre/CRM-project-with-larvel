@extends('layout.main')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-3 col-lg-4">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="user-profile-img">
                                <img src="{{ asset('assets/images/pattern-bg.jpg') }}" class="profile-img profile-foreground-img rounded-top" style="height: 120px;" alt="">
                                <div class="overlay-content rounded-top">
                                    <div>
                                        <div class="user-nav p-3">
                                            <div class="d-flex justify-content-end">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bx bx-dots-horizontal font-size-20 text-white"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end user-profile-img -->

                            <div class="mt-n5 position-relative">
                                <div class="text-center">
                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                    <div class="mt-3">
                                        <h5 class="mb-1">{{ $user->name }}</h5>


                                        <div class="mt-4">
                                            <a href="/users/clients/{{ $user->id }}" class="btn btn-primary waves-effect waves-light btn-sm"><i class="bx bx-send me-1 align-middle"></i> See Clients</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="p-4 mt-2">
                                <h5 class="font-size-16">Info :</h5>

                                <div class="mt-4">
                                    <p class="text-muted mb-1">Name : {{ $user->name }}</p>
                                    <h5 class="font-size-14 text-truncate">Marie N.</h5>
                                </div>

                                <div class="mt-4">
                                    <p class="text-muted mb-1">E-mail :</p>
                                    <h5 class="font-size-14 text-truncate">{{ $user->email }}</h5>
                                </div>

                                <div class="mt-4">
                                    <p class="text-muted mb-1">Role :</p>
                                    <h5 class="font-size-14 text-truncate">@foreach($user->services as $service) {{$service->name ?? ''}}, @endforeach</h5>
                                </div>
                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xxl-9 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Setting</h5>
                            <form action="{{ route('users.update') }}" method="POST" autocomplete="off" novalidate>
                                @csrf
                                <div class="card border shadow-none mb-5">
                                    <div class="card-body">
                                        <div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="gen-info-name-input">Name</label>
                                                        <input type="text" class="form-control" id="gen-info-name-input" value="{{ $user->name }}" placeholder="Enter Name">
                                                    </div>

                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="gen-info-designation-input">E-mail</label>
                                                        <input type="email" class="form-control" id="gen-info-designation-input" value="{{ $user->email }}" placeholder="Enter Email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Role</label>
                                                        <select class="form-control" name="role" id="role">
                                                            @foreach($roles as $role)
                                                                <option value="{{ $role->id }}">{{$role->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Service</label>
                                                        <select name="id_service" class="form-select">
                                                            @isset($user->service->id_service)<option selected value="{{ $user->service->id }}">{{ $user->service->name }}</option>@endisset
                                                            @foreach($services as $service)
                                                                <option value="{{ $service->id }}">{{$service->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary w-sm">Submit</button>
                                </div>


                            </form>
                            <!-- end form -->
                            <div class="card mt-2">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                @if ($message = Session::get('confirm_password'))
                                    <div class="alert alert-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                @if ($message = Session::get('current_password'))
                                    <div class="alert alert-danger">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                <form action="{{ route('change.password')  }}" method="POST" class="needs-validation" autocomplete="off" novalidate>
                                    @csrf
                                    <div>
                                        <div class="card border shadow-none card-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mb-lg-0">
                                                        <label for="current-password-input" class="form-label">Current password</label>
                                                        <input type="password" class="form-control" name="current_password" placeholder="Enter Current password" id="current-password-input" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your current password.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-lg-0">
                                                        <label for="new-password-input" class="form-label">New password</label>
                                                        <input type="password" class="form-control" name="new_password" placeholder="Enter New password" id="new-password-input" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a new password.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-lg-0">
                                                        <label for="confirm-password-input" class="form-label">Confirm password</label>
                                                        <input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm password" id="confirm-password-input" required>
                                                        <div class="invalid-feedback">
                                                            Please confirm your new password.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
@endsection